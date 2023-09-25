
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend/css/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('backend/css/prettify.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('backend/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('backend/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
              
                  
                  <li><a href="{{ route('deshboard.banner.index') }}"><i class="fa fa-file"></i> Add banner <span class="fa fa-chevron-down"></span></a>
                  </li>
                 
                  @if (Auth::user()->hasRole(['admin','editor']))

                  <li><a href="{{ route('deshboard.logo.index') }}"><i class="fa fa-file"></i> Update Logo <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('deshboard.course.index') }}"><i class="fa fa-file"></i> Add course <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('deshboard.seminar.index') }}"><i class="fa fa-file"></i> Add seminar <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-file"></i> category <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('deshboard.create.post') }}"><i class="fa fa-file"></i> Post <span class="fa fa-chevron-down"></span></a>
                  </li>
                      
                  @endif

                    

                  @if (Auth::user()->hasRole('admin'))

                 
                  <li><a href="{{ route('deshboard.all.role') }}"><i class="fa fa-file"></i> Role&permition <span class="fa fa-chevron-down"></span></a>
                  </li>
                      
                  @endif



              
                </ul>
              </div>
    
            </div>
            <!-- /sidebar menu -->

           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('backend/images/img.jpg') }}" alt="">{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                   
<!---------Log------Out---------->

<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out pull-right"></i>
 {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
 @csrf
</form>



                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          @yield('content')
        
        </div>
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
    </div>

    <!-- compose -->
   
    <!-- /compose -->

    <!-- jQuery -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('backend/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('backend/js/nprogress.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('backend/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('backend/js/prettify.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>


    <!-----SwiteAlert---cdn-link----------->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('alertscript')

  </body>
</html>