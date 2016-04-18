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


Route::group(['prefix' => 'panel', 'as' => 'core::'], function() {

	Route::get('/', [
		'as' => 'dashboard', 
		function() { return view('core::layouts.dashboard'); }
	]);

	Route::get('/modules', [
		'as' => 'modules',
		'uses' => 'ModulesController@index'
	]);

	Route::get('/settings', [
		'as' => 'settings',
		'uses' => 'OptionsController@index'
	]);

});