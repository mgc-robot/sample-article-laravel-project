<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'articles'], function () {
    Route::post('/store', ['middleware' => 'auth', 'uses' => 'ArticleController@store']);
    Route::get('/', ['middleware' => 'auth', 'uses' => 'ArticleController@index']);
    Route::get('/new', ['middleware' => 'auth', 'uses' => 'ArticleController@create']);
    Route::get('/{slug}', ['middleware' => 'auth', 'uses' => 'ArticleController@show']);
    Route::get('/{slug}/edit', ['middleware' => 'auth', 'uses' => 'ArticleController@edit']);
    Route::post('/update', ['middleware' => 'auth', 'uses' => 'ArticleController@update']);
    Route::get('/delete/{id}', ['middleware' => 'auth', 'uses' => 'ArticleController@destroy']);
});

//Route::controllers([
//    'auth'     => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController'
//]);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');