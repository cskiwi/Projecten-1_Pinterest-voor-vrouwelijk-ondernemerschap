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

// route to show all users
Route::get('users', 'UserController@showUsers');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to logout
Route::get('logout', array('uses' => 'HomeController@doLogout'));

// user controlpanel
Route::get('admin', array('before' => 'auth', 'uses' => 'HomeController@showUserInfo'));


Route::get('password/reset', array(
    'uses' => 'PasswordController@remind',
    'as' => 'password.remind'
));

Route::post('password/reset', array(
    'uses' => 'PasswordController@request',
    'as' => 'password.request'
));

Route::get('password/reset/{token}', array(
    'uses' => 'PasswordController@reset',
    'as' => 'password.reset'
));

Route::post('password/reset/{token}', array(
    'uses' => 'PasswordController@update',
    'as' => 'password.update'
));