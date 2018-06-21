<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cabodash - @yield('title')</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/icon" href="/images/favicon.ico"/> -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/dash-icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/dash-icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/dash-icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/dash-icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/dash-icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/dash-icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/dash-icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/dash-icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/dash-icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/dash-icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/dash-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/dash-icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/dash-icons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome -->
    <link href="/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" >
    <!-- Slick slider -->
    <link href="/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="/css/magnific-popup.css" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="/css/circle.css">


    <!-- Main Style -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
  @yield('style')

	</head>
  <body>

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

@include('section.header-menu')

@include('section.slider')

	<!-- Start main content -->
	<main>
      @yield('content')
	</main>

	<!-- End main content -->
@include('section.footer')




	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <!-- Progress Bar -->
    <script type="text/javascript" src="/js/circle.js"></script>
    <!-- Filterable Gallery js -->
    <!-- <script type="text/javascript" src="/js/jquery.filterizr.min.js"></script> -->
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter js -->
    <!-- <script type="text/javascript" src="/js/counter.js"></script> -->
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="/js/app.js"></script>


    <!-- Custom js -->
	<script type="text/javascript" src="/js/custom.js"></script>

	@yield('scripts')

  </body>
</html>
