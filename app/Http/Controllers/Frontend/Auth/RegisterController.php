<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr as FacadesToastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //shwo regsiter form
    public function showRegisterForm()
    {
        return view('frontend.auth.register');
    }

    // register new account
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@$!%*#?&]).*$/'
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        
        FacadesToastr::success('Thank you for Registration. Please Login', 'Registration Successful', ["positionClass" => "toast-top-right"]);
        return redirect()->route('user.login');
    }
}
