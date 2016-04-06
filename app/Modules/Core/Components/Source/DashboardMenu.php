<?php

namespace Platonic\Modules\Core\Components\Source;

class DashboardMenu{

	protected $items = array();

	public function __construct()
	{
		
	}

	public function addItem($item){
		array_push($this->items, $item);
	}

	public function getItems(){
		return $this->items;
	}

}