<?php 

use Carbon\Carbon;

if (! function_exists('date_from_now')) {

	function date_from_now($date){
		echo Carbon::parse($date)->diffForHumans();
	}

}