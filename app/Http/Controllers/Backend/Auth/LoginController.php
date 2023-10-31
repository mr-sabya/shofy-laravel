<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //show login form
    public function loginForm()
    {
        return view('backend.auth.login');
    }
}