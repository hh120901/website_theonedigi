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

Route::any('/apply-job', [App\Http\Controllers\Career::class, 'apply_form'])->name('apply_form');
Route::any('/send-contact', [App\Http\Controllers\Contact::class, 'index'])->name('contact_form');
Route::any('/about-details/{id?}', [App\Http\Controllers\About::class, 'about_details'])->name('about_details');
Route::any('/product-details/{id?}', [App\Http\Controllers\Product::class, 'product_details'])->name('product_details');
Route::any('/blogs/{category}/{id?}', [App\Http\Controllers\Blog::class, 'blog_details'])->name('blog_details');
Route::any('/career/{category}/{id?}', [App\Http\Controllers\Career::class, 'career_details'])->name('career_details');

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
Route::any('/admin/applicants', [App\Http\Controllers\Admin\Syslog::class, 'applicants'])->name('syslog.applicants');
Route::any('/admin/applicants/{action}/{id?}', [App\Http\Controllers\Admin\Syslog::class, 'applicants'])->name('syslog.applicants.{action}.{id}');

Route::any('/mail-template', function () {
    return view('emails.career.career');
});

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