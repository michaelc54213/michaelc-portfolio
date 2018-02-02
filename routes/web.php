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


Auth::routes();

Route::get('/', 'PageController@home');
Route::get('/blog', 'PageController@blog');
Route::get('/contact', 'PageController@contact');
Route::post('/contact', ['as'=>'contact_us.store','uses'=>'PageController@contactUsPost']);

