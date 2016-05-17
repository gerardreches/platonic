<?php

namespace Platonic\Core\Providers;

use Caffeinated\Modules\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
	/**
	 * This namespace is applied to the controller routes in your module's routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'Platonic\Core\Http\Controllers';

	/**
	 * Define your module's route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		//
	}

	/**
	 * Define the routes for the module.
	 *
	 * @param  \Illuminate\Routing\Router $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$this->mapModuleRoutes($router);
		$this->mapDashboardRoutes($router);
	}

	/**
     * Define the "web" module routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapModuleRoutes(Router $router)
    {
        $router->group(
			[
				'namespace' => $this->namespace,
				'middleware' => ['web'],
				'as' => 'core::',
			],
			function($router) {
				require (config('modules.path').'/Core/Http/Routes/module.php');
			}
		);
    }

    /**
     * Define the module dashboard routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     * Only authenticated users can access to these routes.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapDashboardRoutes(Router $router)
    {
        $router->group(
			[
				'namespace' => $this->namespace,
				'middleware' => ['web', 'auth'],
				'prefix' => 'dashboard',
				'as' => 'dashboard::',
			],
			function($router) {
				require (config('modules.path').'/Core/Http/Routes/dashboard.php');
			}
		);
    }
}
