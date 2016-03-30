<?php

namespace Platonic\Modules\Core\Providers;

use Caffeinated\Modules\Facades\Module;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
	
	public function register()
	{
		//foreach (Module::enabled() as $module) {
			$this->app->singleton(Factory::class, function () {
	            return Factory::construct(new Faker, config('modules.path') .'/Core/Database/Factories');
	        });
		//}
	}

}
