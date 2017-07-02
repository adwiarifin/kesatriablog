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

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::post('/posts', 'PostsController@store');
Route::patch('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');

Route::get('/posts/tags/{tag}', 'TagsController@show');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/thanks', 'PagesController@thanks');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');