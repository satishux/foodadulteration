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

Route::get('/', [ 'as' => 'pages.home', 'uses' => 'PagesController@home']);

Route::get('browse', [ 'as' => 'pages.browse', 'uses' => 'PagesController@browse']);

Route::get('submission', [ 'as' => 'pages.submission', 'uses' =>  'PagesController@submission']);

Route::get('about', [ 'as' => 'pages.about', 'uses' =>  'PagesController@about' ]);

Route::get('contact', [ 'as' => 'pages.contact', 'uses' =>  'PagesController@contact' ]);



Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' => 'auth.post.login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get( 'logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout'] );

Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', ['as' => 'auth.post.register', 'uses' => 'Auth\AuthController@postRegister']);

Route::resource('categories', 'CategoriesController', ['only' => 'show']);

Route::resource('foods', 'FoodsController', ['only' => 'index']);
Route::get('search', ['as' => 'foods.search', 'uses' => 'FoodsController@search']);
Route::resource('foods', 'FoodsController', ['only' => ['index', 'show']]);

Route::group( ['prefix' => 'admin', 'middleware' => 'auth'], function ()
{
    Route::get('/', [ 'as' => 'admin.dashboard',  'uses' => 'UsersController@dashboard'] );

    Route::resource('foods', 'FoodsController');
    Route::resource('categories', 'CategoriesController');
    Route::get('users/admins', [ 'as' => 'admin.users.adminIndex', 'uses' => 'UsersController@adminIndex']);
    Route::resource('users', 'UsersController');

});
