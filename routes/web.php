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

Route::view('/', 'index')->name('index');

Route::get('/products', 'SearchController@index')->name('products');

Route::get('/product/{product}', 'SearchController@product')->name('product.show');

Route::get('/cart', function() {
	return view('pages.cart');
});

Auth::routes();

Route::get('/products/search', 'SearchController@index')->name('search');

Route::get('/shop', 'SearchController@brandCategory');

Route::get('/district', 'CityController@getDistrict')->name('district');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::middleware(['auth'])->group(function() {
	Route::get('/profile/{user}', function() {
		return view('pages.profile');
	})->name('profile');

	Route::group(['prefix' => 'admin'], function() {
		Route::group(['middleware' => 'admin'], function(){
			Route::get('/', function() {
				return view('admin/index');
			})->name('admin');

			Route::resource('categories', 'CategoryController');
			Route::resource('brands', 'BrandController');
			Route::resource('products', 'ProductController');
			Route::resource('cities', 'CityController');
			Route::resource('districts', 'DistrictController');
			Route::resource('users', 'UserController');
		});
	});

	Route::resource('orders', 'OrderController');
});