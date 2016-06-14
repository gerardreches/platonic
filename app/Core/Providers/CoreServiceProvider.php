<?php

namespace Platonic\Core\Providers;

use App;
use Lang;
use View;
use Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Caffeinated\Modules\Facades\Module;
use Platonic\Core\Components\Facades\DashboardMenu;

class CoreServiceProvider extends ServiceProvider
{
	
	/**
	 * Add inside this function all the dashboard menu items for this module.
	 */
	public function boot(){
		
		if ($this->app->environment() == 'local') {

			// Compile Platonic CSS Framework
            compile_less(
            	base_path('resources/assets/less/platonic.less'), 
            	'css/platonic.css',
            	false
            );

        }

		DashboardMenu::addItem( 'Resume', 'fa fa-tachometer', route('dashboard::resume::index') );
		DashboardMenu::addItem( 'Modules', 'fa fa-cube', route('dashboard::modules::index') );
		DashboardMenu::addItem( 'Users', 'fa fa-users', route('dashboard::users::index') );
		DashboardMenu::addItem( 'Settings', 'fa fa-cog', route('dashboard::options::index') );

	}

	/**
	 * Register module services in the IoC container.
	 */
	public function register()
	{
		App::register('Platonic\Core\Providers\AuthServiceProvider');
		App::register('Platonic\Core\Providers\RouteServiceProvider');
		App::register('Platonic\Core\Providers\HelperServiceProvider');
		App::register('Platonic\Core\Providers\FacadeServiceProvider');
		
		if ($this->app->environment() == 'local') {
            App::register('Platonic\Core\Providers\FactoryServiceProvider');
            App::register('Laracasts\Generators\GeneratorsServiceProvider');
            App::register('Platonic\Module\Generators\ModuleGeneratorsServiceProvider');
        }

        // Set the default Controllers namespace to Core controllers namespace.
        URL::setRootControllerNamespace('Platonic\Core\Http\Controllers');

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