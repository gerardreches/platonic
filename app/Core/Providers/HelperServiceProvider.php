<?php

namespace Platonic\Core\Providers;

require_once(config('modules.path').'/Core'.config('modules.helpers.relative.path').'/ModulesConfigUtils.php');
use Caffeinated\Modules\Facades\Module;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{

    public function register()
    {
        //  This will load all existing php files from your enabled
        //  modules Helpers folders.
        foreach (Module::enabled() as $module) {
            $this->registerHelpers( $module );
        }
    }

    protected function registerHelpers($module){

        $helpersPath = module_path_for('Helpers', $module);
            
        foreach (glob($helpersPath.'/*.php') as $filename){
            if (File::isFile($filename)) {
                require_once($filename);
            }
        }

    }
}