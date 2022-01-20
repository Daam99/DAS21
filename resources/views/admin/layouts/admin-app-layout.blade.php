<!DOCTYPE html>
<html lang="en"><!-- Mirrored from coderthemes.com/zircos/material-design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:38:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('adminAssets/assets/images/favicon.ico') }}">
        <!-- App title -->
        <title>{{ config('app.name', 'DASS21') }} - {{ $title ?? '' }}</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('adminAssets/plugins/morris/morris.css') }}">

        <!-- App css -->
        <link href="{{ asset('adminAssets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminAssets/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminAssets/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminAssets/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminAssets/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminAssets/assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminAssets/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('adminAssets/plugins/switchery/switchery.min.css') }}">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}"></script>
        <![endif]-->

        <script src="{{ asset('adminAssets/assets/js/modernizr.min.js') }}"></script>

    </head>
    <body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('admin.includes.header')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.includes.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
            {{ $slot }}
            @include('admin.includes.footer')
            </div>
             <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->           

        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('adminAssets/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/detect.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/waves.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('adminAssets/plugins/switchery/switchery.min.js') }}"></script>

        <!-- Counter js  -->
        <script src="{{ asset('adminAssets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('adminAssets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('adminAssets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('adminAssets/plugins/raphael/raphael-min.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('adminAssets/assets/pages/jquery.dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('adminAssets/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('adminAssets/assets/js/jquery.app.js') }}"></script>
        {{ $footer_part ?? '' }}
    </body>
</html>