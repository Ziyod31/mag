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

Route::get('/', function () {
    return view('index');
});

Route::get('/products', function() {
	return view('pages.products');
});

Route::get('/product', function() {
	return view('pages.product');
});

Route::get('/cart', function() {
	return view('pages.cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
