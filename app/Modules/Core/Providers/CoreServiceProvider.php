<?php

namespace Platonic\Modules\Core\Providers;

use App;
use Caffeinated\Modules\Facades\Module;
use Config;
use Illuminate\Support\ServiceProvider;
use Lang;
use Platonic\Modules\Core\Components\Facades\DashboardMenu;
use Platonic\Modules\Core\Components\Source\DashboardMenuItem;
use View;

class CoreServiceProvider extends ServiceProvider
{
	
	/**
	 * Add inside this function all the dashboard menu items for this module.
	 */
	public function boot(){
		
		compile_less();

		DashboardMenu::addItem( new DashboardMenuItem('Resume','fa fa-tachometer', route('core::dashboard') ) );

	}

	/**
	 * Register module services in the IoC container.
	 */
	public function register()
	{
		App::register('Platonic\Modules\Core\Providers\RouteServiceProvider');
		App::register('Platonic\Modules\Core\Providers\HelperServiceProvider');
		App::register('Platonic\Modules\Core\Providers\FactoryServiceProvider');
		App::register('Platonic\Modules\Core\Providers\FacadeServiceProvider');

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