<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'blog', 'as' => 'blog::'], function() {
	Route::get('/', 'PostsController@index')->name('posts');
});

Route::group(['prefix' => 'panel', 'as' => 'core::'], function() {

	Route::get('/posts', [
		'as' => 'blog_posts',
		'uses' => 'ModulesController@index'
	]);

	Route::get('/comments', [
		'as' => 'blog_comments',
		'uses' => 'OptionsController@index'
	]);

});