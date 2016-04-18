<?php

if (! function_exists('module_path_of')) {
	function module_path_of($moduleName, $type){
		return config('modules.path') . '/' . $moduleName . config('modules.'.strtolower($type).'.relative.path');
	}
}

if (! function_exists('module_namespace_of')) {
	function module_namespace_of($moduleName, $type){
		return config('modules.namespace') . $moduleName . config('modules.'.strtolower($type).'.relative.namespace');
	}
}