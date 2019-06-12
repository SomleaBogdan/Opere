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
Route::resource('admin/anunturi', 'AnnouncesController');
Route::resource('admin/mesaje', 'MessagesController')->middleware('auth');
Route::resource('admin/conversatii', 'ConversationController')->middleware('auth');
Route::resource('admin/user', 'UserController')->middleware('auth');
Route::resource('admin/cart', 'CartController')->middleware('auth');
Route::resource('admin/contactDetails', 'ContactDetailsController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'UserController@index')->name('adminIndex')->middleware('auth');
Route::get('/products/{id}', 'HomeController@show')->name('showProduct');
Route::post('/admin/setuserimage', 'UserController@setImageForUserWithId')->name('saveimg');

Route::get('/message/{id1}/{id2}/{id3}', 'ConversationController@openOrCreateConversationWith')->name('openConversation')->middleware('auth');

Route::get('admin/orderdone', 'CartController@orderDone');
