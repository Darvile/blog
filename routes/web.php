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

// Home
Route::get('/', 'PagesController@getIndex');

// About
Route::get('/about', 'PagesController@getAbout');

// Contact
Route::get('/contact', 'PagesController@getContact');

Route::resource('posts', 'PostController');