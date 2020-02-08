<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Cando HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/png">

    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,500,600,600i,800,900&display=swap" rel="stylesheet">

    <!-- Load CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/style-data.css">
    <!-- Load CSS -->
    
    <!-- Load CSS -->
   
    <title>Cando - Creative HTML5 Template</title>


  </head>

  <body class="dark-theme text-white section-80">



    <header class="nav-style-5">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark px-lg-5">
        <a class="navbar-brand" href="index-data.html">
          <img src="{{ asset('/') }}front-end/images/logo-analysis.png" alt="Cando HTML5 Template">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="one-page-nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#BackToTop">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#process">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#customers">Customers</a>
            </li>
            <li class="align-self-center nav-item">
              <a href="#quote" class="btn btn-small btn-outline">Free quote</a>
            </li>
          </ul>
        </div>

      </nav>
    </header>



@yield('content')


@include('front-end.includes.footer')


        <!-- Load Scripts -->
        <script src="{{ asset('/') }}front-end/js/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/counter.js"></script>
    <script src="{{ asset('/') }}front-end/js/anime.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/aos.js"></script>
    <script src="{{ asset('/') }}front-end/js/magnific-popup.js"></script>
    <script src="{{ asset('/') }}front-end/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/infinite-scroll.pkgd.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}front-end/js/imagesloaded.pkgd.min.js"></script>
  
    <script src="{{ asset('/') }}front-end/js/single-page-nav.js"></script>
    <script src="{{ asset('/') }}front-end/js/custom.js"></script>

  </body>
</html>
