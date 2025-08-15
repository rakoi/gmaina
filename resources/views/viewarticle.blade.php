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

                <div class="container-fluid bg-breadcrumb" style="background-image: url('{{ Storage::url($publication->image) }}'); align-items: center; justify-content: center; ">

            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-center text-white display-3 mb-4">{{$publication->title}}</h1>
                <p class="fs-5 text-white mb-4"></p>

            </div>
        </div>
        <!-- Header End -->

        <!-- Events Start -->
        <div class="container-fluid event py-5">
            <div class="container py-5">
                <div class=" mx-auto mb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-center text-primary">{{$publication->title}}</h5>
                    <p class="mb-0 text-black">
                        {!!$publication->content!!}
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

    </body>

</html>
