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
// all require login :)
Route::group(array('before' => 'loginCheck'), function()
{
    Route::controller('/users', 'UserController');

    Route::controller('/pins', 'PinController');

    Route::controller('/boards', 'BoardController');

    Route::post('/comment/add/{id}', 'CommentController@addComment');

});


Route::controller('/admin/password', 'RemindersController');
Route::controller('/admin', 'AdminController');

Route::controller('/', 'HomeController');


Route::filter('loginCheck', function()
{
    if (!Auth::check()) {
        return Redirect::to('/')->with('authError', 'Please login');
    }
});

