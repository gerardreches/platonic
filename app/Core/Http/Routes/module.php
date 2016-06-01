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
// Default Route
//--------------------------------------------------------------------------

Route::get('/', function(){
	return view('core::welcome');
});

//--------------------------------------------------------------------------
// Auth Routes
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
		'as' => 'getRegister',
		'uses' => 'Auth\AuthController@getRegister'
	]);
	Route::post('register', [
		'as' => 'register',
		'uses' => 'Auth\AuthController@register'
	]);


	//--------------------------------------------------------------------------
	// Password Reset Routes
	//--------------------------------------------------------------------------

	Route::get('password/reset/{token?}', [
		'as' => 'getReset',
		'uses' => 'Auth\PasswordController@getReset'
	]);
	Route::post('password/email', [
		'as' => 'sendResetLinkEmail',
		'uses' => 'Auth\PasswordController@sendResetLinkEmail'
	]);
	Route::post('password/reset', [
		'as' => 'reset',
		'uses' => 'Auth\PasswordController@reset'
	]);


});