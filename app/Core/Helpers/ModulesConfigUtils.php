<?php

if (! function_exists('module_path_for')) {
	function module_path_for($type, $module){
		return config('modules.path') . '/' . $module['name'] . config('modules.'.strtolower($type).'.relative.path');
	}
}

if (! function_exists('module_namespace_for')) {
	function module_namespace_for($type, $module){
		return config('modules.namespace') . $module['namespace'] . config('modules.'.strtolower($type).'.relative.namespace');
	}
}