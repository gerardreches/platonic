<?php

namespace Platonic\Core\Providers;

use Caffeinated\Modules\Facades\Module;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
	
	public function register()
	{
		//	This will load all your model factory files from the Core module
		//	Database/Factories folder. ModelFactory.php will load the other 
		//	enabled modules.

		$this->app->singleton(EloquentFactory::class, function ($app) {
			$faker = App::make(Faker::class);
			$core_factories_path = config('modules.path') .'\\Core\\Database\\Factories';
            return EloquentFactory::construct($faker, $core_factories_path);
        });

	}

}
