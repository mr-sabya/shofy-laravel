<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @if(Route::is('home'))
    <title>Shofy - Multipurpose eCommerce HTML Template</title>
    @else
    <title>@yield('title') - Shofy - Multipurpose eCommerce HTML Template</title>
    @endif
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon_shofy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/spacing.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/toastr/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
</head>

<body>

    <!-- pre loader area start -->
    @include('frontend.partials.preloader')
    <!-- pre loader area end -->

    <!-- back to top start -->
    @include('frontend.partials.back-to-top')
    <!-- back to top end -->

    <!-- offcanvas area start -->
    @include('frontend.partials.home-menu.offcanvas')
    <!-- offcanvas area end -->

    <!-- mobile menu area start -->
    @include('frontend.partials.mobile-menu')
    <!-- mobile menu area end -->



    <!-- cart mini area start -->
    @include('frontend.partials.cart')
    <!-- cart mini area end -->

    <!-- header area start -->
    @if(Route::is('home'))
    @include('frontend.partials.home-menu.home-header')
    @else
    @include('frontend.partials.other-menu.other-header')
    @endif
    <!-- header area end -->

    <main>

        @if(!Route::is('home'))
        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg {{ Route::is('user.login') || Route::is('user.register') ? 'text-center' : '' }} pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title">@yield('title')</h3>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('home') }}">Home</a></span>
                                @yield('links')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        @endif

        @yield('content')
    </main>


    <!-- footer area start -->
    @include('frontend.partials.footer')
    <!-- footer area end -->



    <!-- JS here -->
    <script src="{{ asset('assets/frontend/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/range-slider.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/infinite-scroll.js') }}"></script>

    <!-- toastr -->
    <script src="{{ url('assets/frontend/vendor/toastr/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    {!! Toastr::message() !!}
</body>

</html>