<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LogistikController@show');

// UC 06
Route::get('input', 'LogistikController@tambahBarang');
Route::get('form/{id}', 'LogistikController@updateBarang');
Route::get('delete/{id}', 'LogistikController@delete');
Route::post('update', 'LogistikController@sendData');
Route::post('store', 'LogistikController@storeData');
// Route::get('coba', 'umum@coba');

// UC 01
Route::get('pOrder', function(){
	return view('pages.purchase_order');
});


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
