<?php

namespace App\Http\Controllers;
use App\Models\SiteSettings;
use App\Models\SocialLinks;
use App\Models\Slider;
use App\Models\Report;
use App\Models\Publication;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

     public function index(Request $request)
        {

            $siteSettings=SiteSettings::first();
            $socialLinks=SocialLinks::all();
            $sliders=Slider::all();
            $reports=Report::inRandomOrder()->limit(4)->get();
            $publications=Publication::inRandomOrder()->limit(4)->get();

    return view('index', compact('siteSettings', 'socialLinks', 'sliders', 'reports', 'publications'));
     }


    public function showArticle($id){
     // Find the publication by ID
            $publication = Publication::find($id);

            // Check if publication exists
            if (!$publication) {
                abort(404, 'Publication not found');
            }

            $siteSettings=SiteSettings::first();
            $socialLinks=SocialLinks::all();
            // Return a view with the publication data
         return view('viewarticle', ['publication' => $publication,'siteSettings'=>$siteSettings,'socialLinks'=>$socialLinks]);
        }

        public function showReport  ($id){

        //start
            $User = auth()->user();
                $user = DB::table('powerbi_users')->where('isActive','=', 1)->first();




                $dashboards = DB::table('reports')->where('id',$id)->first();


                $curl1 = curl_init();
                curl_setopt_array($curl1, array(
                    CURLOPT_URL => "https://login.windows.net/common/oauth2/token",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => array(
                        'grant_type' => 'password',
                        'scope' => 'openid',
                        'resource' => 'https://analysis.windows.net/powerbi/api',
                        'client_id' => $user->client_id,
                        'password' => $user->password,
                        'username' => $user->username,
                        )
                    )
                );

                $tokenResponse = curl_exec($curl1);
                $tokenError = curl_error($curl1);
                curl_close($curl1);

        //        dd(json_decode($tokenResponse));

        // decode result, and store the access_token in $embeddedToken variable:

                $tokenResult = json_decode($tokenResponse, true);

                if($tokenError || array_key_exists('error',$tokenResult)){
        //            dd($tokenError);

                    dd('You are not permitted to view this dashboard');
                }else{
                    $token = $tokenResult["access_token"];
                    $embeddedToken = "Bearer " . ' ' . $token;
                    /*      Use the token to get an embedded URL using a GET request */
                    $group_Id = $dashboards->reportGroup;
        //            $group_Id = '320dc3c4-e3cb-4a5e-9a2f-dbd3e34eb234';
                    $curl2 = curl_init();

                    curl_setopt($curl2, CURLOPT_URL, 'https://api.powerbi.com/v1.0/myorg/groups/' . $group_Id . '/reports/');
                    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl2, CURLOPT_ENCODING, "");
                    curl_setopt($curl2, CURLOPT_MAXREDIRS, 10);
                    curl_setopt($curl2, CURLOPT_TIMEOUT, 30);
                    curl_setopt($curl2, CURLOPT_CUSTOMREQUEST, "GET");
                    curl_setopt($curl2, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
                    curl_setopt($curl2, CURLOPT_HTTPHEADER, array(
                        'Authorization:' . $embeddedToken,
                        'Cache-Control: no-cache'
                    ));

                    $embedResponse = curl_exec($curl2);
                    $embedError = curl_error($curl2);
                    curl_close($curl2);

        //            dd($embedResponse);

                    if ($embedError) {
//
                        dd('Ooops! There was an error!');
                        echo "cURL Error #:" . $embedError;
                    } else {
                        $embedResponse = json_decode($embedResponse, true);
                        $embedUrl = $embedResponse['value'][0]['embedUrl'];
        //                dd($embedResponse);
                    }

$publication = Publication::find($id);
               $siteSettings=SiteSettings::first();
                $socialLinks=SocialLinks::all();
                    return view('viewreport', [
                        'token' => $token,
                        'report'=>$dashboards,
                        'reportId' => $dashboards->reportId,
                        'embedUrl' => $embedUrl,
                        'embedResponse'=>$embedResponse,
                        'siteSettings'=>$siteSettings,
                        'socialLinks'=>$socialLinks,
                        'publication' => $publication
                    ]);
                }

        //end



             return view('viewreport', ['publication' => $publication,'siteSettings'=>$siteSettings,'socialLinks'=>$socialLinks]);
     }


     public function articles(){
         // Find the publication by ID
                $publications = Publication::where('published','=','1')->get();


                $siteSettings=SiteSettings::first();
                $socialLinks=SocialLinks::all();
                // Return a view with the publication data
             return view('allarticles', ['publications' => $publications,'siteSettings'=>$siteSettings,'socialLinks'=>$socialLinks]);
            }



     public function reports(){
         // Find the publication by ID
                $reports = Report::all();


                $siteSettings=SiteSettings::first();
                $socialLinks=SocialLinks::all();
                // Return a view with the publication data
             return view('allreports', ['reports' => $reports,'siteSettings'=>$siteSettings,'socialLinks'=>$socialLinks]);
            }


}
