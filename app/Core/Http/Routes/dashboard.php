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
// Users Routes
//--------------------------------------------------------------------------

Route::group(['prefix' => 'users', 'as' => 'users::'], function() {

	Route::get('/', [
		'as' => 'index',
		'uses' => 'UsersController@index'
	]);

	Route::get('{id}', [
		'as' => 'show',
		'uses' => 'UsersController@show'
	]);

	Route::get('edit/{id}', [
		'as' => 'edit',
		'uses' => 'UsersController@edit'
	]);
	
});


//--------------------------------------------------------------------------
// Options Routes
//--------------------------------------------------------------------------

Route::get('settings', [
	'as' => 'settings',
	'uses' => 'OptionsController@index'
]);