<form action="" method="post" wire:submit.prevent="login">
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
        <input type="email" wire:model.lazy="email" class="form-control" placeholder="hello@example.com">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="form-group mb-3">
        <input type="password" wire:model.lazy="password" class="form-control" placeholder="Password">
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="form-check d-inline-block">
        <input type="checkbox" class="form-check-input" id="check1" name="example1">
        <label class="form-check-label" for="check1">Remember me</label>
    </div>
    <div class="form-group d-flex justify-content-between forget-main mt-2">
        <button type="submit" class="btn btn-primary">Sign Me In</button>

        <a class="" href="">Forget Password ?</a>
    </div>

</form>