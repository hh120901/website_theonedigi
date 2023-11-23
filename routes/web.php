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

Route::get('/about-details', function () {
    return view('sections/about_detail');
});

Route::get('/product-details', function () {
    return view('sections/products_detail');
});

Route::get('/blogs/details/{id?}', function () {
    return view('sections/blog_detail');
});

Route::get('/career/details/{id?}', function () {
    return view('sections/career_detail');
});

//  admin
Route::get('/admin/login', function () {
    return view('admin.login');
});


Route::get('/{details?}', function () {
    return view('fullpage');
});
