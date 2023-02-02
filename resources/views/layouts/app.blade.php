<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>PASTI - Content Management System</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/app-assets/images/ico/logo pasti.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/core/menu/menu-types/vertical-compact-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/vendors/css/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app-assets/css/pages/dashboard-ico.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/assets/css/style.css') }}">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-bg-color">
        <div class="navbar-wrapper">
            <div class="navbar-header d-md-none">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item d-md-none"><a class="navbar-brand" href="index.html"><img class="brand-logo d-none d-md-block" alt="CryptoDash admin logo" src="{{ asset('assets/app-assets/images/logo/logo.png') }}"><img class="brand-logo d-sm-block d-md-none" alt="CryptoDash admin logo sm" src="{{ asset('assets/app-assets/images/logo/logo-sm.png') }}"></a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"> </i></a></li>
                </ul>
            </div>
            <div class="navbar-container">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><i class="ft-user font-large-1"></i></a>
                            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="account-profile.html"><i class="ft-award"></i>{{ Auth::user()->name; }}</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->




    <div class="app-content content">
        <div class="content-wrapper">
            <!-- Recent Transactions -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <h6 class="my-2">@yield('title')</h6>
                    @yield('content')
                </div>
            </div>
            <!--/ Recent Transactions -->
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-transparent">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float d-block d-md-inline-block">Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                </script> <a class="text-bold-800 grey darken-2" target="_blank">PASTI POLINEMA </a>, All rights reserved. </span>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/app-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/app-assets/vendors/js/timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/app-assets/js/scripts/pages/dashboard-ico.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>