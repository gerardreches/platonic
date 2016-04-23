<?php

namespace Platonic\Core\Providers;

use Caffeinated\Modules\Facades\Module;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class FacadeServiceProvider extends ServiceProvider
{

	//	Add inside this array the classes that must have a singleton instance.
	protected $mustBeSingleton = [
		'DashboardMenu'
	];

	//	Add inside this array the facades that must have an alias.
	protected $mustHaveAlias = [
		'DashboardMenu'
	];

	public function register()
	{
		//	This will register in the IoC container all the classes who have
		//	a referencing facade. Class, facade and filenames of both
		//	must have the same name in order to work.

		foreach (Module::enabled() as $module) {
			$this->registerFacades( $module['name'] );
		}
		
	}

	protected function registerFacades($moduleName) {

        foreach (glob(module_path_of($moduleName,'Facades').'/*.php') as $filename){

        	if (File::isFile($filename)) {

                $className = $this->getClassName($filename);

                //	Register the class in the IoC container.
	           	if ( in_array($className, $this->mustBeSingleton, true) ) {
	           		$this->app->singleton($className, module_namespace_of($moduleName,'Classes') . '\\' . $className);
	           	}else{
	           		$this->app->bind($className, module_namespace_of($moduleName,'Classes') . '\\' . $className);
	           	}
	            
	           	//	Register a facade alias.
	            if ( in_array($className, $this->mustHaveAlias, true) ) {
	           		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
					$loader->alias($className, module_namespace_of($moduleName,'Facades').'\\'.$className);
	           	}
				
            }
        }
	}

	//	This function extracts the classname from a full qualified path.
	protected function getClassName($file){
		$p = explode('/', $file);
		$l = end($p);
		return str_replace('.php', '', $l);
	}

}