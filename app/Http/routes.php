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
    Route::post('/store', 'ArticleController@store');
    Route::get('/', 'ArticleController@index');
    Route::get('/new', 'ArticleController@create');
    Route::get('/{slug}', 'ArticleController@show');
    Route::get('/{slug}/edit', 'ArticleController@edit');
    Route::post('/update', 'ArticleController@update');
    Route::get('/delete/{id}', 'ArticleController@destroy');
});

