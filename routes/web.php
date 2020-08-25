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

Route::get('/', function () {
    return view('welcome');
});
Route::post('add','productController@add');

Route::get('getproduct_cart','product_cartController@getproduct_cart');
Route::get('get','productController@get');
Route::post('delete','productController@delete');

Route::get('getcart','cartController@getcart');
