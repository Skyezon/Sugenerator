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
use Illuminate\Support\Facades\Route;

//firstpage

Route::GET('/','FirstPageController@show')->name('first.show');
Route::POST('/','FirstPageController@search')->name('first.search');

//admin function

Route::GET('/admin','InternalController@showAll')->name('Internal.showAll');

Route::GET('/admin/edit-form/{id}','InternalController@chooseForm')->name('Internal.form-edit');
Route::PATCH('/admin/edit-form/edit/{id}','InternalController@edit')->name('Internal.edit');

Route::GET('/admin/add/form','InternalController@chooseForm')->name('Internal.form-add');
Route::POST('/admin/add','InternalController@add')->name('Internal.add');

Route::DELETE('/admin/delete/{id}','InternalController@delete')->name('Internal.delete');

//testing

Route::GET('/admin/{id}','InternalController@testing')->name('Internal.testing');

//sucika function

