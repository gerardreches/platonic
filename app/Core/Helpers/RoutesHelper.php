<?php

if (! function_exists('is_current_route')) {
	function is_current_route($route){
		return Request::url() == $route ? true : false;
	}
}