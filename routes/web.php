<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('app')->group(function () {
    Route::view('/', 'index')->name('app.home');
    Route::view('/about-us', 'about')->name('app.about');
    Route::view('/services', 'services')->name('app.services');
    Route::view('/portfolio', 'portfolio')->name('app.portfolio');
    Route::view('/team', 'team')->name('app.team');
    Route::view('/blog', 'blog')->name('app.blog');
    Route::view('/blog/blog-single', 'blog-single')->name('app.blog.blog-single');
    Route::view('/contact', 'contact')->name('app.contact');
});

Route::fallback(function () {
    echo "NOT FOUND..!!";
});
