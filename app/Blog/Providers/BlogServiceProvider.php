<?php
namespace Platonic\Blog\Providers;

use App;
use Config;
use Illuminate\Support\ServiceProvider;
use Lang;
use Platonic\Core\Components\Facades\DashboardMenu;
use View;

class BlogServiceProvider extends ServiceProvider
{

	/**
	 * Add inside this function all the dashboard menu items for this module.
	 */
	public function boot(){
		
		DashboardMenu::addItem( 'Posts', 'fa fa-pencil', route('core::blog_posts') );
		DashboardMenu::addItem( 'Comments', 'fa fa-comments', route('core::blog_comments') );

	}

	/**
	 * Register module services in the IoC container.
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('Platonic\Blog\Providers\RouteServiceProvider');
		
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
