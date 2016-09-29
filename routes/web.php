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
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);

Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/get/{filename}', [ 'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add', [ 'as' => 'addentry', 'uses' => 'FileEntryController@add']);

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getHome');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Route::resource('tags', 'TagController', ['except' => ['create']]);

Auth::routes();

Route::get('/home', 'HomeController@index');
