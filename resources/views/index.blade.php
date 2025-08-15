@php
    use Illuminate\Support\Str;
@endphp
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
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
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
                            <a href="#aboutdiv" class="nav-item nav-link">About</a>
                            <a href="#reportdiv" class="nav-item nav-link">Reports</a>
                            <a href="#articlediv" class="nav-item nav-link">Articles</a>



                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


       <!-- Carousel Start -->
        <div class="container-fluid carousel-header vh-100 px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/future1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Data Analysis solution</h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Spider Maina</h1>
                                <p class="mb-5 fs-5">
                                   In God we trust. All others must bring data
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5"  href="#aboutdiv">About us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/future3.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Perceive it Better & Act Better</h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Data is the new oil.</h1>
                                <p class="mb-5 fs-5">
                                   Numbers have an important story to tell. They rely on you to give them a clear and convincing voice
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#aboutdiv" >About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->



            <div id="aboutdiv"></div>

        <!-- About Start -->
        <div  class="container-fluid about  py-5" style="margin-top: 5%;" >
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="h-100">

                             <img src= "{{Storage::url($siteSettings->aboutimage)}}" class="img-fluid w-100 h-100" alt="SiteImage">

                        </div>
                    </div>
                    <div   class="col-xl-7">
                        <h5 class="text-uppercase text-primary">About Us</h5>

                        <p class="fs-5 mb-4">
                            {!! $siteSettings->aboutus !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div  class="container-fluid service py-5 bg-light" style="margin-top:8%;"  id="reportdiv">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">My Reports</h5>
                    <h4 class="mb-0">Sample of Reports done</h4>
                </div>
                <div class="row g-4">
                      @foreach($reports as $report)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img  src="{{Storage::url($report->reportImage)}}" class="img-fluid" style="height: 300px;" alt="Image">

                            <div class="service-link">
                                <a href="/report/{{$report->id}}" class="h4 mb-0">{{$report->title}}</a>
                            </div>
                        </div>
                        <p class="my-4">
                            {{$report->description}}
                        </p>
                    </div>
                        @endforeach


                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="/reports">See More</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- Services End -->


        <!-- Blog Start -->
        <div id="articlediv" class="container-fluid blog py-5 mb-5" style="margin-top: 10%;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 id="#articlediv" class="text-uppercase text-primary">My Articles</h5>
                    <h1 class="mb-0">
                    </h1>
                </div>

                <div class="row g-4">
                        @foreach($publications as $publication)

                    <div class="col-lg-6 col-xl-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{Storage::url($publication->image)}}"  class="img-fluid" style="height: 300px ;"  alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i>  {{ $publication->created_at->format('M d, Y') }}</span>

                                </div>

                            </div>
                            <div class="text-dark border p-4 ">
                                 @php
                                   $trimmedContent = ltrim(Str::limit($publication->content, 100));
                                 @endphp


                                <p class="" style="height:100px">
                                       <b class="mb-4 text-black">{{$publication->title}}</b>
                                      {!! $trimmedContent!!}
                                    </p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="/article/{{$publication->id}}">Read More</a>
                            </div>
                        </div>

                    </div>
    @endforeach
          <div class="col-12">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="/articles">All Articles</a>
                                </div>
                            </div>
                     </div>
            </div>

        </div>
        <!-- Blog End -->




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
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>

    </body>

</html>
