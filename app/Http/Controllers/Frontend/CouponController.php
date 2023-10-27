<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //show all coupons
    public function index()
    {
        return view('frontend.coupon.index');
    }
}
