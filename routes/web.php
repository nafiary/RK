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

Route::get('/', 'LogistikController@show');

// UC 06
Route::get('input', 'LogistikController@tambahBarang');
Route::get('form/{id}', 'LogistikController@updateBarang');
Route::get('delete/{id}', 'LogistikController@delete');
Route::post('update', 'LogistikController@sendData');
Route::post('store', 'LogistikController@storeData');
Route::get('coba', 'LogistikController@coba');

// UC 01
Route::get('pOrder', 'PurchaseOrder@show');
Route::post('exportPO', 'PurchaseOrder@exportPO');
