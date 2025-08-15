<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Environs - Environmental & Nature Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->



        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-2">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>{{$siteSettings->email}}</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>{{$siteSettings->telephone}}</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">

                                   @foreach($socialLinks as $link)
                                                <a href="{{$link->link}}"  target="_blank" rel="noopener noreferrer" class="btn-square text-white me-2">
                                                    <i class="fab fa-{{ $link->icon }}"></i>
                                                </a>
                                            @endforeach


                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="/" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">{{$siteSettings->sitename}}</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="/#" class="nav-item nav-link active">Home</a>
                            <a href="/#aboutdiv" class="nav-item nav-link">About</a>
                            <a href="/#reportdiv" class="nav-item nav-link">Reports</a>
                            <a href="/#articlediv" class="nav-item nav-link">Articles</a>



                        </div>

                    </div>
                </nav>
            </div>
        </div>

        <!-- Navbar End -->

        <!-- Header Start -->


        <!-- Header End -->

        <!-- Events Start -->
        <div class="container-fluid event py-5" style="margin-top:10%">
            <div class="container py-5">
                <div class=" mx-auto mb-9" >
                    <h5 class="text-uppercase text-center text-primary">{{$report->title}}</h5>
                    <p class="mb-0 text-black">


 @if($embedUrl)
        <button onclick="Report_FullScreen()"  type="button" style="float: right" class="btn btn-primary">
            FullScreen Dashboard
        </button>
        <div style="height: 700px" id="reportContainer"></div>
    @else
        <div class="alert ">You are not allowed to access this resource!</div>
    @endif
{{--<iframe width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=ab8927f5-90be-479f-af22-70cca64b83b9&autoAuth=true&ctid=a46229c7-21d1-417d-a1cb-1857a07d2765&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWV1cm9wZS1ub3J0aC1iLXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9" frameborder="0" allowFullScreen="true"></iframe>--}}
{{--    <iframe width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=e4f766f9-cfa7-4b82-b270-d0648a4f16fe&groupId=320dc3c4-e3cb-4a5e-9a2f-dbd3e34eb234&autoAuth=true&ctid=a46229c7-21d1-417d-a1cb-1857a07d2765&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWV1cm9wZS1ub3J0aC1iLXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9" frameborder="0" allowFullScreen="true"></iframe>--}}



                        </p>
                </div>
                </div>
        </div>
        <!-- Events End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>{{$siteSettings->sitename}}</a> All right reserved.</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                              @foreach($socialLinks as $link)
                                        <a href="{{ $link->link }}" target="_blank" rel="noopener noreferrer" class="btn-square text-white me-2">
                                            <i class="fab fa-{{ $link->icon }}"></i>
                                        </a>
                                    @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/lib/easing/easing.min.js"></script>
        <script src="/lib/waypoints/waypoints.min.js"></script>
        <script src="/lib/counterup/counterup.min.js"></script>
        <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="/lib/lightbox/js/lightbox.min.js"></script>


        <!-- Template Javascript -->
        <script src="/js/main.js"></script>

         <script src="/js/powerbi.js"></script>
            <script>
                // Get models. models contains enums that can be used.
                var models = window['powerbi-client'].models;
                // Embed configuration used to describe the what and how to embed.
                // This object is used when calling powerbi.embed.
                // This also includes settings and options such as filters.
                // You can find more information at https://github.com/Microsoft/PowerBI-JavaScript/wiki/Embed-Configuration-Details.
                var embedConfiguration= {
                    type: 'report',
                   id: '<?php echo $reportId ?>', // the report ID
                   // id: 'ab8927f5-90be-479f-af22-70cca64b83b9', // the report ID
                    embedUrl: "<?php echo $embedUrl ?>",
                    accessToken: "<?php echo $token; ?>" ,
                    pageName: 'Programs',
                };
                var reportContainer = $('#reportContainer');
                var report = powerbi.embed(reportContainer.get(0), embedConfiguration);


                function Report_FullScreen()
                {
                    // Get a reference to the embedded report HTML element
                    var embedContainer = $('#reportContainer')[0];
                    // Get a reference to the embedded report.
                    report = powerbi.get(embedContainer);
                    // report.setPage('ReportSection8466117e209a87aa77be');
                    // Displays the report in full screen mode.
                    report.fullscreen();
                }

            </script>

    </body>

</html>
