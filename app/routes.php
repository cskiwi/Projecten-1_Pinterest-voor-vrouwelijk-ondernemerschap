<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// root route
Route::get('/', 'HomeController@showWelcome');


Route::controller('/users', 'UserController');
Route::controller('/posts', 'PostController');
Route::controller('/admin/password', 'RemindersController');
Route::controller('/admin', 'AdminController');
