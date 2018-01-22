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
//Route::get('admin/profile', 'ProfileController@index');
//Route::post('admin/profile/update', 'ProfileController@update');
Route::get('admin/projects/search', 'ProjectsController@search');
Route::resource('admin/projects', 'ProjectsController');
Route::resource('admin/profile', 'ProfileController');
Auth::routes();


