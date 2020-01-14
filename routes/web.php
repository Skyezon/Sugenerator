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

use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\InternalController;
// use Illuminate\Routing\Route;

Route::get('/','FirstPageController@show')->name('first.show');

Route::get('/admin','InternalController@showAll')->name('Internal.showAll');

