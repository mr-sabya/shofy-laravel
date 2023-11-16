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


// 

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('shop', [App\Http\Controllers\Frontend\ShopController::class, 'index'])->name('shop.index');
Route::get('departments', [App\Http\Controllers\Frontend\DepartmentController::class, 'index'])->name('department.index');
Route::get('coupons', [App\Http\Controllers\Frontend\CouponController::class, 'index'])->name('coupon.index');

// blog
Route::get('blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.index');


// 
Route::get('login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'showLoginForm'])->name('user.login');

Route::get('register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'showRegisterForm'])->name('user.register');
Route::post('register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'register'])->name('user.register.submit');


Route::prefix('admin')->group(function () {

    Route::get('login', [App\Http\Controllers\Backend\Auth\LoginController::class, 'loginForm'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Backend\Auth\LoginController::class, 'login'])->name('admin.login.submit');

    Route::group(['middleware'=>'admin'],function(){
        Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

        //common 
        Route::get('get-department-select-option', [App\Http\Controllers\Backend\CommonController::class, 'getDepartment'])->name('admin.get.department');
        
        
        // departments
        Route::resource('department', App\Http\Controllers\Backend\DepartmentController::class, ['names' => 'admin.department']);
        Route::post('department/update', [App\Http\Controllers\Backend\DepartmentController::class, 'update'])->name('admin.department.update');

        // categories
        Route::resource('category', App\Http\Controllers\Backend\CategoryController::class, ['names' => 'admin.category']);
        Route::post('category/update', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('admin.category.update');

    });
});
