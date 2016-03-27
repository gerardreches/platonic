<?php
namespace App\Modules\Blog\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
	/**
	 * Register the Blog module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Blog\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Blog module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('blog', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('blog', base_path('resources/views/vendor/blog'));
		View::addNamespace('blog', realpath(__DIR__.'/../Resources/Views'));
	}
}
