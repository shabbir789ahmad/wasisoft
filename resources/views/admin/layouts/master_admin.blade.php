
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../adminAssets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../adminAssets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('admin_title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../adminAssets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../adminAssets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../adminAssets/demo/demo.css" rel="stylesheet" />
    {{-- Tabledata Css --}}
  <link rel="stylesheet" href="{{asset('adminAssets/css/dataTables.min.css')}}">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        {{-- <a href="" class="simple-text logo-mini">
          #
        </a> --}}
        <a href="" class="simple-text logo-normal">
          WasiSoft Technology
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'' == request()->path() ? 'active' : ''}}">
            <a href="/Admin-Home">
              <i class="now-ui-icons education_atom"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="{{'global-content' == request()->path() ? 'active' : ''}}">
            <a href="/global-content">
              <i class="now-ui-icons location_map-big"></i>
              <p>Global Content</p>
            </a>
          </li>
          <li class="{{'about-us' == request()->path() ? 'active' : ''}}">
            <a href="/about-us">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>About Us</p>
            </a>
          </li>
          <li class="{{'contact-us' == request()->path() ? 'active' : ''}}">
            <a href="/contact-us">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Contact Us</p>
            </a>
          </li>
          <li class="{{'newsletter-admin' == request()->path() ? 'active' : ''}}">
            <a href="/newsletter-admin">
              <i class="now-ui-icons design_app"></i>
              <p>Newsletters</p>
            </a>
          </li>
          <li class="{{'role-register' == request()->path() ? 'active' : ''}}">
            <a href="/role-register">
              <i class="now-ui-icons users_single-02"></i>
              <p>Registered Profile</p>
            </a>
          </li>


        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">@yield('admin_title')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form class="mr-3">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">

              <li class="dropdown mt-2">
                <a class="pt-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" style="overflow: hidden" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>
                </li>
              <li class="nav-item">
                <a class="nav-link">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        @yield('admin_content')
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../adminAssets/js/core/jquery.min.js"></script>
  <script src="../adminAssets/js/core/popper.min.js"></script>
  <script src="../adminAssets/js/core/bootstrap.min.js"></script>
  {{-- datatables js--}}
  <script src="{{asset('adminAssets/js/dataTables.min.js')}}"></script>

  <script src="../adminAssets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../adminAssets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../adminAssets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../adminAssets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../adminAssets/demo/demo.js"></script>
  {{-- sweet Alert --}}
  {{-- <script src="{{asset('adminAssets/js/sweetalert.js')}}"></script>
  <script>
       @if (session('status'))
       alert("{{ session('status') }}");
    //    swal({
    //     title: "{{ session('status') }}",
    //     // text: "You clicked the button!",
    //     icon: "{{ session::has('codestatus') }}",
    //     button: "OK",
    //     });
     @endif

  </script> --}}
  @yield('admin_script')

</body>

</html>
