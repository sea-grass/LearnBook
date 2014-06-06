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

/*
 | The following routes will handle redirecting the user to their
 | dashboard. The plan is to use Laravel's session helper to
 | retrieve the correct user profile.
 */
Route::get('/', array('before' => 'auth', 'uses' => 'UsersController@dashboard'));
Route::get('/user',array('before' => 'auth','UsersController@dashboard'));
Route::get('/user/dashboard',array('before' => 'auth','UsersController@dashboard'));

//The register route is used to display the register form.
//The register form POSTs to the createUser route.
//The login route is used to display the login form.
//The login form POSTs to the signin route.
Route::get('/user/register','UsersController@register');
Route::get('/user/login','UsersController@login');
Route::get('/user/logout','UsersController@logout');


/*
 | The following routes are used for form actions. Form submissions
 | should all be handled using only POST requests, such that all
 | variables are hidden.
 |
 | TODO: Place any future methods that will handle any form POST
 | requests here.
 */

//Processes the login form
Route::post('/user/signin','UsersController@signin');

//Processes the register form
Route::post('/user/createUser','UsersController@createUser');