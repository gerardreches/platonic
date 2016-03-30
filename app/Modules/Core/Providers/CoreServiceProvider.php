<?php
namespace Platonic\Modules\Core\Providers;

use App;
use Caffeinated\Modules\Facades\Module;
use Config;
use Illuminate\Support\ServiceProvider;
use Lang;
use View;

class CoreServiceProvider extends ServiceProvider
{
	/**
	 * Register the Core module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('Platonic\Modules\Core\Providers\RouteServiceProvider');
		App::register('Platonic\Modules\Core\Providers\FactoryServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Core module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('core', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('core', base_path('resources/views/vendor/core'));
		View::addNamespace('core', realpath(__DIR__.'/../Resources/Views'));
	}
}
