<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //show dashboard
    public function index()
    {
        return view('backend.home.index');
    }
}
