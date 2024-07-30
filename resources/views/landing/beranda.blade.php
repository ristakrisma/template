<!DOCTYPE html>
<html lang="en">
<head>
    <title>DKM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('landing/assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/assets/img/favicon.ico')}}">
    <!-- Load Require CSS -->
    <link href="{{ asset('landing/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('landing/assets/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/templatemo.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/custom.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">


</head>
@extends('landing.master')

    <!-- Header -->
    @include('tools.nav')
<body>
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Develop <strong>Strategies</strong> for 
                                  <br>your business
                              </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                    Purple Buzz is a corporate HTML template with Bootstrap 5 Beta 1. This CSS template is 100% free to download provided by TemplateMo</a>. Total 6 HTML pages included in this template. Icon fonts by Boxicons</a>. Photos are from </a> and Icons 8</a>.
                              </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    HTML CSS Template with Bootstrap 5 Beta 1
                                </h1>
                                <p class="banner-body text-muted py-3">
                                    You are not allowed to re-distribute this Purple Buzz HTML template as a downloadable ZIP file on any kind of Free CSS collection websites. This is strongly prohibited. Please contact TemplateMo for more information.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Cupidatat non proident, sunt in culpa qui officia
                                </h1>
                                <p class="banner-body text-muted py-3">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->



    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Recent Work -->
    <section class="py-5 mb-5">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Contoh Produk</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img" src="{{ asset('landing/assets/img/boer kambing.jpeg') }}" alt="Card image" style="width: 100%; height: 350px; object-fit: cover;">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Social Media</h3>
                                <p class="card-text">Ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img" src="{{ asset('landing/assets/img/sapi.jpeg') }}" alt="Card image" style="width: 100%; height: 350px; object-fit: cover;">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Web Marketing</h3>
                                <p class="card-text">Psum officia anim id est laborum.</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img" src="{{ asset('landing/assets/img/kambing.jpeg') }}" alt="Card image" style="width: 100%; height: 350px; object-fit: cover;">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">R & D</h3>
                                <p class="card-text">Sum dolor sit consencutur</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
            </div>
        </div>
    </section>
    <!-- End Recent Work -->



    <!-- Start Footer -->
    <div class="footer">
  <div class="left-content">
    <h2>DKM</h2>
    <div class="location">
      <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
      <span class="text">Lokasi</span>
    </div>
    <div class="text">Jl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce</div>
  </div>
  <div class="center-content">
    <div class="website">
      <span class="icon"><i class="bi bi-globe"></i></span>
      <span class="text">Loremipsum.com</span>
    </div>
    <div class="email">
      <span class="icon"><i class="bi bi-envelope"></i></span>
      <span class="text">Loremipsum@gmail.com</span>
    </div>
    <div class="phone">
      <span class="icon"><i class="bi bi-telephone"></i></span>
      <span class="text">+6233333</span>
    </div>
  </div>
  <div class="right-content">
    <div class="dkm">DKM merupakan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper pretium urna,
       a suscipit felis lobortis lacinia. Nulla facilisi. Suspendisse potenti. Duis id bibendum velit.
        Aenean nec aliquet justo. Etiam faucibus nisl quis imperdiet posuere. Nullam vel ultrices nibh. Nunc erat massa,
         aliquet sed massa et, viverra eleifend est. Maecenas imperdiet eleifend quam, vel fringilla eros feugiat id. Maecenas
         fringilla sagittis egestas. Maecenas fringilla, massa vel maximus ultricies, urna massa maximus diam, ac tincidunt nulla
          magna nec lectus. Fusce varius nibh est, </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap --> 
    <script src="{{ asset('landing/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{ asset('landing/assets/js/jquery.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{ asset('landing/assets/js/isotope.pkgd.js')}}"></script>
   
</body>
</html>