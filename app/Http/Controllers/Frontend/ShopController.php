<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //show shop
    public function index()
    {
        return view('frontend.shop.index');
    }
}
