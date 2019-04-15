<?php

use Illuminate\Http\Request;
use App\Events;
use App\Users;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


    // Events
    Route::get('events', 'EventsController@index');
    Route::get('events/search/{term}', 'EventsController@getByName');
    Route::get('events/date', 'EventsController@getByDate');
    Route::get('events/{event}', 'EventsController@show');
    Route::post('events', 'EventsController@store');
    Route::put('events/{event}', 'EventsController@update');
    Route::delete('events/{event}', 'EventsController@delete');

    // Submission & Checkin
    Route::post('submit', 'CheckinsController@submit');
    Route::post('checkin', 'CheckinsController@checkin');

    // Users
    Route::get('users', 'UsersController@index');
    Route::get('users/search/{term}', 'UsersController@getByName');
    Route::get('users/{user}', 'UsersController@show');
    Route::put('users/{user}', 'UsersController@update');
    Route::delete('users/{user}', 'UsersController@delete');

// Login and Register
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){

});
