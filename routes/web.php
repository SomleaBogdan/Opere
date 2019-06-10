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

Route::get('/', 'HomeController@index');

Route::auth();
Route::resource('admin/anunturi', 'AnnouncesController')->middleware('auth');
Route::resource('admin/mesaje', 'MessagesController')->middleware('auth');
Route::resource('admin/conversatii', 'ConversationController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'UserController@index')->name('adminIndex')->middleware('auth');
Route::get('/products/{id}', 'HomeController@show')->name('showProduct');

Route::get('/message/{id1}/{id2}/{id3}', 'ConversationController@openOrCreateConversationWith')->name('openConversation')->middleware('auth');