<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //show all departments
    public function index()
    {
        $square = true;
        return view('frontend.department.index', compact('square'));
    }
}
