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

Route::get('/', 'ProjectsController@index');

Route::prefix('mylabs')->group(function () {
  Route::get('/', function () {
      return view('admin.index');
  });

  Route::prefix('users')->group(function () {
    Route::get('', 'UsersController@index');
    Route::get('/create', 'UsersController@create');
    Route::get('/json', 'UsersController@json');
  });
  
  Route::get('/projects', 'ProjectsController@index');
});