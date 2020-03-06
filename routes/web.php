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

use Illuminate\Support\Facades\URL;

if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\InternalController;
use Illuminate\Support\Facades\Route;

//firstpage

Route::GET('/','FirstPageController@show')->name('first.show');
Route::POST('/','FirstPageController@search')->name('first.search');
Route::GET('/scan/{token}','FirstPageController@scan')->name('first.scan');
Route::GET('/show/{token}','FirstPageController@scan')->name('first.result');

//admin function

Route::GET('/adminpalingkerenyangsusahditebak','InternalController@showAll')->name('Internal.showAll');

Route::GET('/adminpalingkerenyangsusahditebak/edit-form/{id}','InternalController@chooseForm')->name('Internal.form-edit');
Route::PATCH('/adminpalingkerenyangsusahditebak/edit-form/edit/{id}','InternalController@edit')->name('Internal.edit');

Route::GET('/adminpalingkerenyangsusahditebak/add/form','InternalController@chooseForm')->name('Internal.form-add');
Route::POST('/adminpalingkerenyangsusahditebak/add','InternalController@add')->name('Internal.add');

Route::DELETE('/adminpalingkerenyangsusahditebak/delete/{id}','InternalController@delete')->name('Internal.delete');

//testing

// Route::GET('/adminpalingkerenyangsusahditebak/{id}','InternalController@testing')->name('Internal.testing');

//print;

Route::GET('/printsemuahasilyangkumau','InternalController@print')->name('Print.show');
Route::GET('/tokenyanguntukheroku','InternalController@toke')->name('toke.show');

//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
