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

Route::group(['prefix' => 'dashboard', 'as' => 'core::'], function() {

	Route::get('/', [
		'as' => 'dashboard', 
		function() { return view('core::layouts.dashboard'); }
	]);

	Route::get('modules', [
		'as' => 'modules',
		'uses' => 'ModulesController@index'
	]);
	Route::get('modules/{slug}/enable', [
		'as' => 'enable',
		'uses' => 'ModulesController@enable'
	]);
	Route::get('modules/{slug}/disable', [
		'as' => 'disable',
		'uses' => 'ModulesController@disable'
	]);
	

	Route::get('settings', [
		'as' => 'settings',
		'uses' => 'OptionsController@index'
	]);

});