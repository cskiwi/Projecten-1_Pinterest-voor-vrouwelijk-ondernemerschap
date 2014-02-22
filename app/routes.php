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

Route::controller('/users', 'UserController');

Route::controller('/posts', 'PostController');

Route::controller('/boards', 'BoardController');

Route::controller('/admin/password', 'RemindersController');
Route::controller('/admin', 'AdminController');

Route::controller('/', 'HomeController');
