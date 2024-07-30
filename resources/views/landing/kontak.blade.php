<!DOCTYPE html>
<html lang="en">

<head>
    <title>KONTAK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

</head>

<body>
@extends('landing.master')
@include('tools.nav')
    <section class="bg-light">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-4">
                    <h1 class="h2 pb-3 text-primary">Contact</h1>
                    <h3 class="h4 regular-400">Anda dapat menghubungi kami melalui platform berikut</h3>
                    <p class="light-300">
                    <ul class="list-unstyled contact-list">
                    <li class="contact-item mb-3">
                    <ul class="list-unstyled">
            <li><a href="https://wa.me/08957534600" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a></li><br>
            <li><a href="mailto:info@yourdomain.com"><i class="bi bi-envelope-at-fill"></i> email@gmail.com</a></li><br>
            <li><i class="bi bi-geo-alt-fill"></i> Jalan Contoh No. 123, Kota, Negara</li><br>
        </ul>
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="{{ asset('landing/assets/img/masjiddd.png')}}">
                </div>
            </div>
        </div>

    </section>
    <!-- End Banner Hero -->

  
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
    </footer>
</body>

</html>