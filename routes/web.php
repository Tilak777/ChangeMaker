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

Route::get('/podcast', function () {
    return view('podcast');
});
Route::get('/message', function () {
    return view('message');
});


Route::get('quote', 'QuotesController@create');
Route::post('post_quote', 'QuotesController@store');
Route::get('/quotes', 'QuotesController@index');


Route::get('admin', 'AdminController@index');
Route::get('confirmquote/{id}', 'AdminController@confirmQuote');
Route::get('viewmessage/{id}', 'AdminController@viewmessage');


Route::get('posts', 'PostsController@index');
Route::get('create_post', 'PostsController@create');
Route::post('create_post', 'PostsController@store');
Route::post('post_comment/{id}', 'CommentsController@store');
Route::get('view_comments/{id}', 'CommentsController@show');
