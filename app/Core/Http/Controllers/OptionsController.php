<?php

namespace Platonic\Core\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Core\Http\Controllers\Controller;

class OptionsController extends Controller
{
	
	public function index(){
		$options = Option::all();
		return view('core::options.index', compact('options'));
	}

}