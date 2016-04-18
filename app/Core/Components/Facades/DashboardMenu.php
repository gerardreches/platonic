<?php

namespace Platonic\Core\Components\Facades;

use Illuminate\Support\Facades\Facade;

class DashboardMenu extends Facade {

	protected static function getFacadeAccessor(){
		return 'DashboardMenu';
	}

}