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

Route::get('/', 'ViewController@getHome');
Route::get('/home', 'ViewController@getHome');
Route::get('/about', 'ViewController@getAbout');
Route::get('/contact', 'ViewController@getContact');

Route::get('/messages', 'messagesController@getMessages');

Route::post('/contact/submit', 'messagesController@submit');
