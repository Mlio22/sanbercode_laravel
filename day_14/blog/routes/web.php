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

// 

Route::redirect('/', '/home', 301);

Route::get('home', 'HomeController@index');

Route::get('/register', 'AuthController@index');

Route::post('/register/create', 'AuthController@create');

Route::get('welcome', 'AuthController@welcome');