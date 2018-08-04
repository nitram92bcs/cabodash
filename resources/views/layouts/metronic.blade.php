<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
BASE: http://keenthemes.com/preview/metronic/theme/admin_2/index.html
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') - Cabodash </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metronic/simple-line-icons-gb/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metronic/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metronic/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('metronic/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('metronic/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('metronic/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metronic/css/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('metronic/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
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
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        @include('metronic.header')
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('metronic.sidebar')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    @include('metronic.theme-panel')
                    <!-- END THEME PANEL -->
                    <h1 class="page-title"> @yield('title-c')
                        <small>@yield('sub-title-c')</small>
                    </h1>
                    <div class="page-bar">
                        @include('metronic.breadcrumb')
                        @include('metronic.page-bar-action')
                    </div>
                    <!-- END PAGE HEADER-->
                    @yield('content')
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
         @include('metronic.quick-sidebar')   
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Rancho Avicola El Platanito &nbsp;|&nbsp;
                Cabodash
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            @include('metronic.quick-nav')
        </div>
            <!--[if lt IE 9]>
<script src="/respond.min.js"></script>
<script src="/excanvas.min.js"></script> 
<script src="/ie8.fix.min.js"></script> 
<![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('metronic/js/jquery.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/bootstrap.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/js.cookie.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/jquery.slimscroll.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/jquery.blockui.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/bootstrap-switch.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('metronic/js/app.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('metronic/js/layout.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/demo.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/quick-sidebar.js')}}" type="text/javascript"></script>
            <script src="{{asset('metronic/js/quick-nav.js')}}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>

</body>


</html>