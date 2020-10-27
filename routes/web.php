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

Route::get('/product', function() {
	return view('pages.product');
});

Route::get('/cart', function() {
	return view('pages.cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@search')->name('search');

Route::get('/shop', 'SearchController@brandCategory');

Route::get('/region', 'CityController@getRegion')->name('region');