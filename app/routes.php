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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::any('/','UsersController@dashboard');
Route::any('/user','UsersController@dashboard');

Route::any('/user/register','UsersController@register');
Route::any('/user/signout','UsersController@signout');
Route::any('/user/signup','UsersController@signup');
Route::any('/user/signin','UsersController@signin');