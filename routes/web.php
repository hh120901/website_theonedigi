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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('sections/about');
});

Route::get('/about-details', function () {
    return view('sections/about_detail');
});

Route::get('/products', function () {
    return view('sections/products');
});

Route::get('/product-details', function () {
    return view('sections/products_detail');
});