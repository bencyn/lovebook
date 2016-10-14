<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });
Route::get('/','HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');

// page routes
Route::get('/future', 'Front@future');

Route::get('/songs','Front@songs');
Route::get('/gifts','Front@gifts');
Route::get('/photos','Front@photos');


// Register post resourceful controller
Route::resource('posts','PostController');

// display posts route
Route::resource('/posts', 'posts.show');
// forms create route
Route::resource('/posts/create','posts.create');

// route store posts
Route::resource('/posts','posts.store');

// display photo routes
Route::resource('/posts/{posts}','posts.show');
// edit photo routes
Route::resource('posts/{post}','posts.edit');
// update photo route
Route::resource('post/{post}/edit','posts.update');
// delete photo route
Route::resource('post/{post','posts.destroy');

