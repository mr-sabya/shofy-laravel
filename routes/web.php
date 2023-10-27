<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('shop', [App\Http\Controllers\Frontend\ShopController::class, 'index'])->name('shop.index');
Route::get('departments', [App\Http\Controllers\Frontend\DepartmentController::class, 'index'])->name('department.index');
Route::get('coupons', [App\Http\Controllers\Frontend\CouponController::class, 'index'])->name('coupon.index');
