@extends('frontend.layouts.base')

@section('title', 'Login')

@section('links')
<span>@yield('title')</span>
@endsection

@section('content')
<!-- login area start -->
<section class="tp-login-area pb-140 p-relative z-index-1 fix">
    <div class="tp-login-shape">
        <img class="tp-login-shape-1" src="{{ url('assets/frontend/img/login/login-shape-1.png') }}" alt="">
        <img class="tp-login-shape-2" src="{{ url('assets/frontend/img/login/login-shape-2.png') }}" alt="">
        <img class="tp-login-shape-3" src="{{ url('assets/frontend/img/login/login-shape-3.png') }}" alt="">
        <img class="tp-login-shape-4" src="{{ url('assets/frontend/img/login/login-shape-4.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="tp-login-wrapper">
                    <div class="tp-login-top text-center mb-30">
                        <h3 class="tp-login-title">Login to Shofy.</h3>
                        <p>Don’t have an account? <span><a href="{{ route('user.register') }}">Create a free account</a></span></p>
                    </div>
                    <div class="tp-login-option">
                        <div class="tp-login-social mb-10 d-flex flex-wrap align-items-center justify-content-center">
                            <div class="tp-login-option-item has-google">
                                <a href="#">
                                    <img src="assets/img/icon/login/google.svg" alt="">
                                    Sign in with google
                                </a>
                            </div>
                            <div class="tp-login-option-item">
                                <a href="#">
                                    <img src="{{ url('assets/frontend/img/icon/login/facebook.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="tp-login-option-item">
                                <a href="#">
                                    <img class="apple" src="{{ url('assets/frontend/img/icon/login/apple.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tp-login-mail text-center mb-40">
                            <p>or Sign in with <a href="#">Email</a></p>
                        </div>
                        <div class="tp-login-input-wrapper">
                            <div class="tp-login-input-box">
                                <div class="tp-login-input">
                                    <input id="email" type="email" placeholder="shofy@mail.com">
                                </div>
                                <div class="tp-login-input-title">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="tp-login-input-box">
                                <div class="tp-login-input">
                                    <input id="tp_password" type="password" placeholder="Min. 6 character">
                                </div>
                                <div class="tp-login-input-eye" id="password-show-toggle">
                                    <span id="open-eye" class="open-eye">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <span id="close-eye" class="open-close">
                                        <i class="fas fa-eye-slash"></i>
                                    </span>
                                </div>
                                <div class="tp-login-input-title">
                                    <label for="tp_password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                            <div class="tp-login-remeber">
                                <input id="remeber" type="checkbox">
                                <label for="remeber">Remember me</label>
                            </div>
                            <div class="tp-login-forgot">
                                <a href="forgot.html">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="tp-login-bottom">
                            <a href="profile.html" class="tp-login-btn w-100">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login area end -->
@endsection