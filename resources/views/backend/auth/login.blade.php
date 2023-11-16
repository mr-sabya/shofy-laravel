@extends('backend.layouts.auth')

@section('title', 'Login')

@section('form')

<form action="{{ route('admin.login.submit') }}" method="post" class=" dz-form ">
    @csrf
    <h3 class="form-title m-t0">Personal Information</h3>
    @if(Session::has('error-message'))
    <p class="alert alert-info">{{ Session::get('error-message') }}</p>
    @endif
    <div class="dz-separator-outer m-b5">
        <div class="dz-separator bg-primary style-liner"></div>
    </div>
    <p>Enter your e-mail address and your password. </p>
    <div class="form-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="hello@example.com">
        @if($errors->has('email'))
        <span style="color: red;">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="form-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
        @if($errors->has('password'))
        <span style="color: red;">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="form-check d-inline-block">
        <input type="checkbox" class="form-check-input" id="check1" name="example1">
        <label class="form-check-label" for="check1">Remember me</label>
    </div>
    <div class="form-group d-flex justify-content-between forget-main mt-2">
        <button type="submit" class="btn btn-primary">Sign Me In</button>

        <button class="nav-link btn tp-btn-light btn-primary forget-tab " id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false">Forget Password ?</button>
    </div>

</form>
@endsection