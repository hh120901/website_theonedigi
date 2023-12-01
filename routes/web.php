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

Route::any('/test', function () {
    return view('testpage');
});
Route::any('/about-details/{id?}', function () {
    return view('sections/about_detail');
});

Route::any('/product-details/{id?}', function () {
    return view('sections/products_detail');
});

Route::any('/blogs/details/{id?}', function () {
    return view('sections/blog_detail');
});

Route::any('/career/details/{id?}', function () {
    return view('sections/career_detail');
});

//  admin
Route::any('/admin', [App\Http\Controllers\Admin\Syslog::class, 'index'])->name('syslog');
Route::any('/admin/about', [App\Http\Controllers\Admin\Syslog::class, 'about'])->name('syslog.about');
Route::any('/admin/about/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'about'])->name('syslog.about.{action}.{id}');
Route::any('/admin/products', [App\Http\Controllers\Admin\Syslog::class, 'products'])->name('syslog.products');
Route::any('/admin/products/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'products'])->name('syslog.products.{action}.{id}');
Route::any('/admin/teams', [App\Http\Controllers\Admin\Syslog::class, 'teams'])->name('syslog.teams');
Route::any('/admin/teams/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'teams'])->name('syslog.teams.{action}.{id}');
Route::any('/admin/logout', [App\Http\Controllers\Admin\Syslog::class, 'logout'])->name('syslog.logout');
Route::any('/admin/users', [App\Http\Controllers\Admin\Syslog::class, 'users'])->name('syslog.users');
Route::any('/admin/users/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'users'])->name('syslog.users.{action}.{id}');
Route::any('/admin/categories', [App\Http\Controllers\Admin\Syslog::class, 'categories'])->name('syslog.categories');
Route::any('/admin/categories/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'categories'])->name('syslog.categories.{action}.{id}');
Route::any('/admin/blogs', [App\Http\Controllers\Admin\Syslog::class, 'blogs'])->name('syslog.blogs');
Route::any('/admin/blogs/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'blogs'])->name('syslog.blogs.{action}.{id}');
Route::any('/admin/career', [App\Http\Controllers\Admin\Syslog::class, 'career'])->name('syslog.career');
Route::any('/admin/career/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'career'])->name('syslog.career.{action}.{id}');

Route::any('/admin/user-role', function () {
    return view('admin.roles.index');
});
Route::any('/admin/contact', function () {
    return view('admin.contact.index');
});
Route::any('/admin/contact/edit/{id?}', function () {
    return view('admin.contact.edit');
});

Route::any('/admin/login', [App\Http\Controllers\Admin\Syslog::class, 'login'])->name('syslog.login');

Route::any('/{slide?}', [App\Http\Controllers\Home::class, 'index'])->name('home');