<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/linearicon.css') }}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/font-awesome.css') }}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/themify.css') }}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/ratio.css') }}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/remixicon.css') }}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/feather-icon.css') }}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/animate.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/bootstrap.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vector-map.css') }}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/vendors/slick.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/custom.css') }}">
    @livewireStyles
</head>

<body x-data="{ loading: true }" x-init="setTimeout(() => loading = false, 1000)">

    <div id="loading" x-show="loading" x-transition.opacity>
    <!-- <div id="loading"> -->
        <div class="content-area">
            <!-- loading content here -->
            <div class="tp-preloader-content">
                <div class="tp-preloader-logo">
                    <img src="{{ url('assets/backend/images/logo/1.png') }}" alt="">
                </div>
                <p class="tp-preloader-subtitle mt-4">Loading.....</p>
            </div>
        </div>
    </div>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <livewire:backend.theme.header />
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <livewire:backend.theme.sidebar />
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">
                @yield('content')
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <livewire:backend.theme.logout />
    <!-- Modal End -->

    <!-- latest js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/icons/feather-icon/feather.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- scrollbar simplebar js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/scrollbar/simplebar.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/scrollbar/custom.js') }}"></script>

    <!-- Sidebar jquery -->
    <script data-navigate-once src="{{ asset('assets/backend/js/config.js') }}"></script>

    <!-- tooltip init js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/tooltip-init.js') }}"></script>

    <!-- Plugins JS -->
    <script data-navigate-once src="{{ asset('assets/backend/js/sidebar-menu.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/notify/bootstrap-notify.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/notify/index.js') }}"></script>

    <!-- Apexchar js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/chart/apex-chart/apex-chart1.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/chart/apex-chart/moment.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/chart/apex-chart/chart-custom1.js') }}"></script>


    <!-- slick slider js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/slick.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/custom-slick.js') }}"></script>

    <!-- customizer js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/customizer.js') }}"></script>

    <!-- ratio js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/ratio.js') }}"></script>

    <!-- sidebar effect -->
    <!-- <script data-navigate-once src="{{ asset('assets/backend/js/sidebareffect.js') }}"></script> -->

    <!-- Theme js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/script.js') }}"></script>
    @livewireScripts
</body>



</html>