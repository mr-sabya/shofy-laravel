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

        // get department
        Route::get('get-department-select-option', [App\Http\Controllers\Backend\CommonController::class, 'getDepartment'])->name('admin.get.department');
        Route::get('get-department-select-option/{id}', [App\Http\Controllers\Backend\CommonController::class, 'getDepartmentById'])->name('admin.get.department.byid');

        // get category
        Route::get('get-category-select-option', [App\Http\Controllers\Backend\CommonController::class, 'getCategory'])->name('admin.get.category');
        Route::get('get-category-select-option/{id}', [App\Http\Controllers\Backend\CommonController::class, 'getCategoryById'])->name('admin.get.category.byid');
        
        
        // departments
        Route::resource('department', App\Http\Controllers\Backend\DepartmentController::class, ['names' => 'admin.department']);
        Route::post('department/update', [App\Http\Controllers\Backend\DepartmentController::class, 'update'])->name('admin.department.update');

        // categories
        Route::resource('category', App\Http\Controllers\Backend\CategoryController::class, ['names' => 'admin.category']);
        Route::post('category/update', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('admin.category.update');

        // sub categories
        Route::resource('sub-category', App\Http\Controllers\Backend\SubCategoryController::class, ['names' => 'admin.sub-category']);
        Route::post('sub-category/update', [App\Http\Controllers\Backend\SubCategoryController::class, 'update'])->name('admin.sub-category.update');

        // slider
        Route::resource('slider', App\Http\Controllers\Backend\SliderController::class, ['names' => 'admin.slider'])->except(['create', 'show']);
        Route::post('slider/update', [App\Http\Controllers\Backend\SliderController::class, 'update'])->name('admin.slider.update');


        // small slider
        Route::resource('small-slider', App\Http\Controllers\Backend\SmallSliderController::class, ['names' => 'admin.small-slider'])->except(['create', 'show']);
        Route::post('small-slider/update', [App\Http\Controllers\Backend\SmallSliderController::class, 'update'])->name('admin.small-slider.update');

    });
});
