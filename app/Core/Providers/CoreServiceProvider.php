<?php

namespace Platonic\Core\Providers;

use App;
use Caffeinated\Modules\Facades\Module;
use Config;
use Illuminate\Support\ServiceProvider;
use Lang;
use Platonic\Core\Components\Facades\DashboardMenu;
use View;

class CoreServiceProvider extends ServiceProvider
{
	
	/**
	 * Add inside this function all the dashboard menu items for this module.
	 */
	public function boot(){
		
		compile_less();

		DashboardMenu::addItem( 'Resume', 'fa fa-tachometer', route('core::dashboard') );
		DashboardMenu::addItem( 'Modules', 'fa fa-cube', route('core::modules') );
		DashboardMenu::addItem( 'Settings', 'fa fa-cog', route('core::settings') );

	}

	/**
	 * Register module services in the IoC container.
	 */
	public function register()
	{
		App::register('Platonic\Core\Providers\RouteServiceProvider');
		App::register('Platonic\Core\Providers\HelperServiceProvider');
		App::register('Platonic\Core\Providers\FactoryServiceProvider');
		App::register('Platonic\Core\Providers\FacadeServiceProvider');

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