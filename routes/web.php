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
})->name('index');

Route::get('/products', 'SearchController@index')->name('products');

Route::get('/product/{id}', 'SearchController@product')->name('product');

Route::get('/cart', function() {
	return view('pages.cart');
});

Auth::routes();

Route::get('/products/search', 'SearchController@index')->name('search');

Route::get('/shop', 'SearchController@brandCategory');

Route::get('/district', 'CityController@getDistrict')->name('district');

Route::get('/admin', function () {
	return view('admin/index');
})->name('admin');