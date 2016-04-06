<?php

namespace Platonic\Modules\Core\Providers;

use Caffeinated\Modules\Facades\Module;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{

    public function register()
    {
        foreach (Module::enabled() as $module) {
            $this->registerHelpers( $module->get('name') );
        }
    }

    protected function registerHelpers($moduleName){
        $helpersPath = config('modules.path').'/'.$moduleName.config('modules.helpers.relative.path');
            
            foreach (glob($helpersPath.'/*.php') as $filename){
                if (File::isFile($filename)) {
                    require_once($filename);
                }
            }
    }
}