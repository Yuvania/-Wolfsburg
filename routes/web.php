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
//home
Route::get('/', 'ProductMenuController@home');

//read
Route::get('/products', 'ProductMenuController@productList');

//create
Route::get('/products/create', 'ProductMenuController@create');
Route::post('/products', 'ProductMenuController@store');

//update
Route::get('/products/{id}/edit', 'ProductMenuController@edit');
Route::post('/products/{id}/edit', 'ProductMenuController@update');

//delete
Route::post('/products/{id}/delete', 'ProductMenuController@destroy');