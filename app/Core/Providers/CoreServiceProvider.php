<?php

namespace Platonic\Core\Providers;

use App;
use Caffeinated\Modules\Facades\Module;
use Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Lang;
use Platonic\Core\Components\Facades\DashboardMenu;
use Platonic\Core\Models\OptionGroup;
use View;

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

            $options = OptionGroup::findByName('Site CSS')->first()->options()->get();
            $vars = [];
            foreach($options as $option){
            	$vars[$option->name] = $option->value;
            }
            // Compile custom site CSS
            compile_less(
            	config('modules.path').'/Core/Resources/Assets/Less/site.less',
            	'css/site.css',
            	false,
            	$vars
            );

        }

		DashboardMenu::addItem( 'Resume', 'fa fa-tachometer', route('dashboard::resume::index') );
		DashboardMenu::addItem( 'Modules', 'fa fa-cube', route('dashboard::modules::index') );
		DashboardMenu::addItem( 'Users', 'fa fa-users', route('dashboard::users::index') );
		DashboardMenu::addItem( 'Settings', 'fa fa-cog', route('dashboard::settings') );

	}

	/**
	 * Register module services in the IoC container.
	 */
	public function register()
	{
		App::register('Platonic\Core\Providers\RouteServiceProvider');
		App::register('Platonic\Core\Providers\HelperServiceProvider');
		App::register('Platonic\Core\Providers\FacadeServiceProvider');
		
		if ($this->app->environment() == 'local') {
            App::register('Platonic\Core\Providers\FactoryServiceProvider');
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