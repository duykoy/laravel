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

//        Route::get('/login', 'AccountController@login');
//        Route::get('/register', 'AccountController@register');
//        Route::get('/home', 'AccountController@home');
//        Route::get('/list', 'AccountController@list');
//        Route::get('/Create', 'AccountController@create');
//        Route::get('/Store', 'AccountController@store');
Route::resource('/cat', 'BlogController');
