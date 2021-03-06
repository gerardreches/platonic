<?php

/*
|--------------------------------------------------------------------------
| Module Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the dashboard routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(['prefix' => 'blog', 'as' => 'blog::'], function() {

	Route::get('/posts', [
		'as' => 'posts',
		'uses' => 'PostsController@index'
	]);

	Route::get('/comments', [
		'as' => 'comments',
		'uses' => 'CommentsController@index'
	]);
	
});