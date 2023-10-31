<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- PAGE TITLE HERE -->
    <title>@yield('title') - Shofy Admin Panel</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="{{ asset('assets/backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendor/nouislider/nouislider.min.css') }}">
    <link href="{{ asset('assets/backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/datatables/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- tagify-css -->
    <link href="{{ asset('assets/backend/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--********* Preloader start *************-->
    <div id="preloader">
        <div>
            <img src="{{ url('assets/backend/images/pre.gif') }}" alt="">
        </div>
    </div>
    <!--*********** Preloader end ************-->

    <!--************* Main wrapper start ******************-->
    <div id="main-wrapper">

        <!--************* Nav header start ******************-->
        @include('backend.partials.nav-header')
        <!--************* Nav header end ******************-->



        <!--************** Header start *****************-->
        @include('backend.partials.header')
        <!--************** Header end ti-comment-alt ****************-->



        <!--*************** Sidebar start *******************-->
        @include('backend.partials.sidebar')

        <!--*************** Sidebar end ******************-->



        <!--************** Content body start ******************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <!--**************** Content body end ******************-->
        
    </div>
    <!--************ Main wrapper end *****************-->



    <!--************ Scripts **********************-->


    <!-- Required vendors -->
    <script src="{{ asset('assets/backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    

    <!-- tagify -->
    <script src="{{ asset('assets/backend/vendor/tagify/dist/tagify.js') }}"></script>

    <!-- data table -->
    <script src="{{ asset('assets/backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/datatables/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins-init/datatables.init.js') }}"></script>

    
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
    <script src="{{ asset('assets/backend/js/deznav-init.js') }}"></script>
</body>


</html>