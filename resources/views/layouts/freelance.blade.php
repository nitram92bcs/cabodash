<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cabodash is a web development team which provides tools and solutions web for their costumers">
        <meta name="author" content="Cabodash">
        <title>@yield('title') - Cabodash</title>

        <!-- Bootstrap Core CSS -->
        <link href="/freelance/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="/freelance/css/style.css" rel="stylesheet">
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
        <link href="/freelance/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
            <!--  Verificación de Google -->
        <meta name="google-site-verification" content="0Ay3R22Ss5gabc4fIELiLQCRqpe-7at5Kebyo44XSAY" />
        @yield('style')
    </head>

  <body id="page-top" class="index">

      <!-- Navigation -->
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="#page-top"> Cabodash</a>
                  {{-- <a class="navbar-brand" href="#page-top"><img src="/img/logo-dash.png" alt="Cabodash" height="30px"></a> --}}
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
            @include('freelance.menu')
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
      </nav>

      <!-- Header -->
      @include('freelance.header')

      @yield('content')

      <!-- Footer -->
      <footer class="text-center">
          <div class="footer-above">
              <div class="container">
                  @include('freelance.footer')
              </div>
          </div>
          <div class="footer-below">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                      {!!trans('freelance.footer-copyright')!!} | <a href="/login">Login</a>
                      </div>
                  </div>
              </div>
          </div>
      </footer>

      <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
      <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
          <a class="btn btn-primary" href="#page-top">
              <i class="fa fa-chevron-up"></i>
          </a>
      </div>

      <!-- jQuery -->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/jquery-ui.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="/freelance/vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Plugin JavaScript -->

      <!-- Contact Form JavaScript -->
      <script src="/freelance/js/jqBootstrapValidation.js"></script>
      <script src="/freelance/js/contact_me.js"></script>

      <!-- Theme JavaScript -->
      <script src="/freelance/js/freelancer.min.js"></script>
        @yield('scripts')
  </body>

</html>
