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


//--------------------------------------------------------------------------
// Core Routes
//--------------------------------------------------------------------------

Route::group(['as' => 'core::', 'middleware' => ['web'] ], function() {


	//--------------------------------------------------------------------------
	// Authentication Routes
	//--------------------------------------------------------------------------

	Route::group(['as' => 'auth::'], function() {

		//--------------------------------------------------------------------------
		// Authentication Routes
		//--------------------------------------------------------------------------

		Route::get('login', [
			'as' => 'getLogin',
			'uses' => 'Auth\AuthController@getLogin'
		]);
		Route::post('login', [
			'as' => 'login',
			'uses' => 'Auth\AuthController@login'
		]);
		Route::get('logout', [
			'as' => 'logout',
			'uses' => 'Auth\AuthController@logout'
		]);


		//--------------------------------------------------------------------------
		// Registration Routes
		//--------------------------------------------------------------------------

		Route::get('register', [
			'as' => 'showRegistrationForm',
			'uses' => 'Auth\AuthController@showRegistrationForm'
		]);
		Route::post('register', [
			'as' => 'register',
			'uses' => 'Auth\AuthController@register'
		]);


		//--------------------------------------------------------------------------
		// Password Reset Routes
		//--------------------------------------------------------------------------

		Route::get('password/reset/{token?}', [
			'as' => 'showResetForm',
			'uses' => 'Auth\AuthController@showResetForm'
		]);
		Route::post('password/email', [
			'as' => 'sendResetLinkEmail',
			'uses' => 'Auth\AuthController@sendResetLinkEmail'
		]);
		Route::post('password/reset', [
			'as' => 'reset',
			'uses' => 'Auth\AuthController@reset'
		]);


	});

});


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard::', 'middleware' => ['web'] ], function() {

	Route::get('/', function(){
		return redirect()->route('dashboard::resume::index');
	});


	//--------------------------------------------------------------------------
	// Resume Routes
	//--------------------------------------------------------------------------

	Route::group(['prefix' => 'resume', 'as' => 'resume::'], function() {
		
		Route::get('/tasks', [
			'as' => 'index',
			'uses' => 'TasksController@index'
		]);

		Route::post('/task/create', [
			'as' => 'create',
			'uses' => 'TasksController@create'
		]);

		Route::post('/task', [
			'as' => 'store',
			'uses' => 'TasksController@store'
		]);

		Route::put('/task', [
			'as' => 'update',
			'uses' => 'TasksController@store'
		]);

		Route::delete('/task/{task}', [
			'as' => 'destroy',
			'uses' => 'TasksController@destroy'
		]);

	});


	//--------------------------------------------------------------------------
	// Modules Routes
	//--------------------------------------------------------------------------

	Route::group(['prefix' => 'modules', 'as' => 'modules::'], function() {

		Route::get('/', [
			'as' => 'index',
			'uses' => 'ModulesController@index'
		]);
		Route::put('{slug}/enable', [
			'as' => 'enable',
			'uses' => 'ModulesController@enable'
		]);
		Route::put('{slug}/disable', [
			'as' => 'disable',
			'uses' => 'ModulesController@disable'
		]);
		
	});


	//--------------------------------------------------------------------------
	// Options Routes
	//--------------------------------------------------------------------------

	Route::get('settings', [
		'as' => 'settings',
		'uses' => 'OptionsController@index'
	]);

});