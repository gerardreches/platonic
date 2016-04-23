<?php

/*
|--------------------------------------------------------------------------
| Modules Model Factories
|--------------------------------------------------------------------------
|
| This file will load all your model factories from the currently enabled modules.
| Model factories give you a convenient way to create models for testing and seeding
| your database. Just tell the factory how a default model should look.
|
*/

foreach(Module::enabled() as $module){

	if($module['name'] === 'Core'){

		//--------------------------------------------------------------------------
		// Core factories already loaded in FactoryServiceProvider.
		//--------------------------------------------------------------------------

	}else{

		$factory->load( config('modules.path') . '\\' . $module['name'] . '\\Database\\Factories' );
	}

}