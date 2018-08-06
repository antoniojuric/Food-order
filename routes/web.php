<?php

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

// Auth

Auth::routes();

// Home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/add-to-cart/{id}', 'HomeController@addToCart')->name('addToCart');
Route::get('/shopping-cart', 'HomeController@getCart')->name('shoppingCart');
Route::get('/profile-edit', 'HomeController@getUserInfo')->name('profile');
Route::get('/removeItem/{id}', 'HomeController@removeItem')->name('removeItem');
Route::get('/reduceItem/{id}', 'HomeController@reduceItem')->name('reduceItem');
Route::get('/getOrders', 'HomeController@getUserOrders')->name('user_orders');
Route::get('/registeruser','HomeController@registerView')->name('registerUser');

Route::post('/profile-update', 'HomeController@updateProfile')->name('updateProfile');
Route::post('post-checkout', 'HomeController@postCheckout')->name('postCheckout');
Route::post('/registeruser', 'HomeController@registerUser')->name('registerUser');

//SweetAlert
Route::get('alert/{AlertType}','sweetalertController@alert')->name('alert');

// Administration
Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/finished_orders', 'AdminController@finishedOrders')->name('admin_finish');
	Route::get('/add_food', 'AdminController@getFoodCategory')->name('add_food');
	Route::get('/add_category', 'AdminController@getCategory')->name('categoryAdd');


	Route::post('/updateStatusOrder/{id}', 'AdminController@updateStatusOrder')->name('updateStatusOrder');
	Route::post('/add_food', 'AdminController@add_food')->name('add_food');
	Route::post('/add_category', 'AdminController@postCategory')->name('categoryAdd');

});

