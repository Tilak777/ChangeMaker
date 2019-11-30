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

Route::get('quote', 'QuotesController@create');
Route::post('post_quote', 'QuotesController@store');
Route::get('/', 'QuotesController@index');


Route::get('admin', 'AdminController@index');
Route::get('confirmquote/{id}', 'AdminController@confirmQuote');
Route::get('viewmessage/{id}', 'AdminController@viewmessage');