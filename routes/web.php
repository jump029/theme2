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

Route::get('/', 'BoardController@index');
Route::get('/add_post_data','BoardController@add_post_data');
Route::post('/add_post_data','BoardController@create_post_data');
Route::get('/add_reply_data/{post_id?}','BoardController@add_reply_data');
//Route::post('/add_reply_data','BoardController@add_reply_data');
Route::post('/add_reply_data','BoardController@create_reply_data');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
