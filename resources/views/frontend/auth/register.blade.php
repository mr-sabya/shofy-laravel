@extends('frontend.layouts.base')

@section('title', 'Register')

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
                        <h3 class="tp-login-title">Sign Up Shofy.</h3>
                        <p>Already have an account? <span><a href="{{ route('user.login') }}">Sign In</a></span></p>
                    </div>
                    <form action="{{ route('user.register.submit') }}" method="post">
                        @csrf
                        <div class="tp-login-option">
                            <div class="tp-login-social mb-10 d-flex flex-wrap align-items-center justify-content-center">
                                <div class="tp-login-option-item has-google">
                                    <a href="#">
                                        <img src="{{ url('assets/frontend/img/icon/login/google.svg') }}" alt="">
                                        Sign up with google
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
                                <p>or Sign up with <a href="#">Email</a></p>
                            </div>
                            <div class="tp-login-input-wrapper">
                                <div class="tp-login-input-box">
                                    <div class="tp-login-input">
                                        <input id="name" type="text" placeholder="Your Full Name" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="tp-login-input-title">
                                        <label for="name">Your Name</label>
                                    </div>
                                    @if($errors->has('name'))
                                    <span class="validation-error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="tp-login-input-box">
                                    <div class="tp-login-input">
                                        <input id="email" type="email" placeholder="username@mail.com" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="tp-login-input-title">
                                        <label for="email">Your Email</label>
                                    </div>
                                    @if($errors->has('email'))
                                    <span class="validation-error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="tp-login-input-box">
                                    <div class="tp-login-input">
                                        <input id="tp_password" type="password" placeholder="Min. 8 character" name="password">
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
                                    @if($errors->has('password'))
                                    <span class="validation-error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                <div class="tp-login-remeber">
                                    <input id="remeber" type="checkbox">
                                    <label for="remeber">I accept the terms of the Service & <a href="#">Privacy Policy</a>.</label>
                                </div>
                            </div>
                            <div class="tp-login-bottom">
                                <button type="submit" class="tp-login-btn w-100">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login area end -->
@endsection