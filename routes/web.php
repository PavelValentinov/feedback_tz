<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','MainController@home');

Route::get('/feedback', 'MainController@feedback')->name(name: 'feedback');

Route::get('/all_info_feedback', 'MainController@all_info_feedback');

Route::post('/feedback/check', 'MainController@feedback_check');
