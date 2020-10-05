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
Route::redirect('/', '/home', 301);
Route::get('/welcome', function () {
    return view('shop.home');
});
Route::get('/product', 'App\Http\Controllers\Controller@showProducts')->name('showProducts');
Route::get('/productDetail', 'App\Http\Controllers\ProductController@showDetailProducts')->name('showDetailProducts');
Route::get('/home', 'App\Http\Controllers\HomeController@showHome')->name('showHome');

