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
Route::get('home', 'ViewController@getHome');
Route::get('about', 'ViewController@getAbout');
Route::get('contact', 'ViewController@getContact');


// Projects
Route::get('projects', 'ProjectsController@getProjects');
Route::get('projects/add', 'ProjectsController@getProjects'); // add project view
Route::post('projects/add', 'ProjectsController@addProject'); // add project controller
Route::get('projectsJSON', 'ProjectsController@getProjectsJSON');
Route::get('projectsJSONOutput', 'ProjectsController@getProjectsJSONOutput'); // json output

Route::get('projects/delete/{id}', 'ProjectsController@deleteProject')->where('id', '[0-9]+');

// Messages (todo: delete)
Route::get('messages', 'messagesController@getMessages');

// Account stuff
Route::get('logout', 'ViewController@getLogout');
