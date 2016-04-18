<?php

namespace Platonic\Core\Components\Source;

class DashboardMenuItem{
	
	protected $title;
	protected $icon;
	protected $route;

	public function __construct($title, $icon, $route)
	{
		$this->title = $title;
		$this->icon = $icon;
		$this->route = $route;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getIcon(){
		return $this->icon;
	}

	public function getRoute(){
		return $this->route;
	}

}