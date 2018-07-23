<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create')->name("create-post");

Route::get('/posts/{id}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::post('/post/{post}/comment', 'CommentsController@store');


Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/users/{user}', 'UserController@show');

Route::get('/posts/tags/{tag}', 'TagController@show');