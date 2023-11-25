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
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/about', function () {
    return view('admin.about.index');
});
Route::get('/admin/about/edit/{id?}', function () {
    return view('admin.about.edit');
});
Route::get('/admin/blogs', function () {
    return view('admin.blogs.index');
});
Route::get('/admin/blogs/edit/{id?}', function () {
    return view('admin.blogs.edit');
});
Route::get('/admin/products', function () {
    return view('admin.products.index');
});
Route::get('/admin/products/edit/{id?}', function () {
    return view('admin.products.edit');
});
Route::get('/admin/teams', function () {
    return view('admin.teams.index');
});
Route::get('/admin/teams/edit/{id?}', function () {
    return view('admin.teams.edit');
});
Route::get('/admin/career', function () {
    return view('admin.career.index');
});
Route::get('/admin/career/edit/{id?}', function () {
    return view('admin.career.edit');
});
Route::get('/admin/users', function () {
    return view('admin.users.index');
});
Route::get('/admin/users/edit/{id?}', function () {
    return view('admin.users.edit');
});
Route::get('/admin/user-role', function () {
    return view('admin.roles.index');
});
Route::get('/admin/contact', function () {
    return view('admin.contact.index');
});
Route::get('/admin/contact/edit/{id?}', function () {
    return view('admin.contact.edit');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/{slide?}', function () {
    return view('fullpage');
});