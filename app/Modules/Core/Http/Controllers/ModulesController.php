<?php

namespace Platonic\Modules\Core\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
	
	public function index(){
		$modules = Module::all();
		return view('modules.index', compact('modules'));
	}

	public function show($slug){
		$module = Module::getProperties($slug);
		return view('modules.show', compact('module'));
	}

	public function enable($slug){
		Module::enable($slug);
	}

	public function disable($slug){
		Module::disable($slug);
	}

}