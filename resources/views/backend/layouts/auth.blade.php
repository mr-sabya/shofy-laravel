<!DOCTYPE html>
<html lang="en" class="h-100">



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

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/bootstrap.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/custom.css') }}">
    @livewireStyles
</head>

<body class="vh-100">
    <div class="page-wraper ">

        <!-- Content -->
        <div class="page-body" style="background-color: rgb(249, 249, 246);">
            <!-- Coming Soon -->
            <div class="bg-img-fix overflow-hidden">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-12 vh-100 d-flex align-items-center">

                        <div class="card o-hidden card-hover w-100">


                            <div class="card-body p-3">
                                <div class="logo-header d-flex align-items-center justify-content-center mb-5">
                                    <a href="index.html" class="logo"><img src="{{ url('assets/backend/images/logo/1.png') }}" alt="" style="width: 150px;"></a>
                                </div>

                                @yield('form')


                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <!-- Full Blog Page Contant -->
        </div>
        <!-- Content END-->
    </div>


    <!-- Required vendors -->
    <!-- latest js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script data-navigate-once src="{{ asset('assets/backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
</body>


</html>