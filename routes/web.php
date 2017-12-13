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

Auth::routes();

// Basic pages
Route::get('/', 'ViewController@getHome');
Route::get('/home', 'ViewController@getHome');
Route::get('/about', 'ViewController@getAbout');
Route::get('/contact', 'ViewController@getContact');


// Projects
Route::get('/projects', 'ProjectsController@getProjects');
Route::post('/projects/add', 'ProjectsController@addProject'); // add projects
Route::get('/projectsJSON', 'ProjectsController@getProjectsJSON'); // json output

// Messages (todo: delete)
Route::get('/messages', 'messagesController@getMessages');

// Account stuff
Route::get('/logout', 'ViewController@getLogout');


