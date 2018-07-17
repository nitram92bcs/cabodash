<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.6 -->
    <link href="/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    {{-- <link href="/adminlte/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- FontAwesome 4.3.0 -->
    <link href="/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" type="css/text" href="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"/> -->

    <!-- Theme style -->
    <link href="/adminlte/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="/adminlte/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker
    <link href="/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    -->
    <!-- Daterange picker
    <link href="/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    -->
    <link href="/css/bootstrap-select.css" rel="stylesheet">
    @yield('header')
  </head>
  <body class="skin-red">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{route('home')}}" class="logo"><b>Admin</b>RAEP</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegaci&oacute;n</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  	<img src="/img/avatar-usuario.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Usuario</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  	
                    	<img src="/img/avatar-usuario.jpg" class="user-image" alt="User Image"/>
                    <p>
                      <small>RAEP</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="/auth/logout" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
             
              	<img src="/img/avatar-usuario.jpg" class="user-image" alt="User Image"/>
            </div>
            <div class="pull-left info">
              <p>Usuario</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="@yield('dashboard')">
              <a href="">
                <i class="fa fa-dashboard"></i> <span>Escritorio</span>
                <small class="label pull-right bg-green"></small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content-header">
          @yield('content-header')
        </section>
        <section class="content">
          @yield('content')
        </section>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
    <strong>Copyright &copy; 2018 <a href="{{route('home')}}">Rancho Avicola El Platanito</a>.</strong> Derechos Reservados.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <!-- <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
    <!-- <script src="/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
    <!-- jQuery UI 1.11.2 -->
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <!-- <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script> -->
    <script src="/bootstrap-4.1.2-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/js/app.min.js" type="text/javascript"></script>
    <!--<script src="/bootstrap-4.1.2-dist/js/bootstrap.js"></script>-->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/adminlte/js/pages/dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
    function sendRequestAjaxGet(data,url,callback){
      $.ajax({
        url: url,
        type: 'get',
        data: data,
        success:   function(data){
           if(!jQuery.isEmptyObject(data))
           {
            callback(data);
           }
        }
      })
    }
    function sendRequestAjaxPost(data,url,callback,pD=true,cT='application/x-www-form-urlencoded; charset=UTF-8'){
        $.ajax({
        url: url,
        type: 'POST',
        data: data,
        processData: pD,
        contentType: cT,
        success:   function(data){
            // console.log(data)
            if(!jQuery.isEmptyObject(data))
            {
            callback(data);
            }
        }
        })
    }
</script>
    @yield('script')

  </body>
</html>
