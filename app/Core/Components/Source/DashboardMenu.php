<?php

namespace Platonic\Core\Components\Source;

class DashboardMenu{

	protected $items = array();

	public function addItem($title, $icon, $route){
		$item = new DashboardMenuItem($title, $icon, $route);
		array_push($this->items, $item);
	}

	public function getItems(){
		return $this->items;
	}

}