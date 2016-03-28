<?php

namespace Platonic\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    protected $helpers = [
        //Add all the helpers filenames (without .php)
        "lesscompiler",
        "prettymessage"
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {

        $debug = false;

        if($debug){
            foreach ($this->helpers as $helper) {
                $helper_path = app_path().'/Helpers/'.$helper.'.php';

                if (\File::isFile($helper_path)) {
                    require_once $helper_path;
                }
            }
        }else{
            // Load all the helpers
            foreach (glob(app_path().'/Helpers/*.php') as $filename){
                require_once($filename);
            }
        }
        
    }
}