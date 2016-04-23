<?php

namespace Platonic\Core\Http\Controllers;

use Caffeinated\Modules\Facades\Module;
use Illuminate\Http\Request;
use Platonic\Core\Http\Controllers\Controller;

class ModulesController extends Controller
{
	
	public function index(){
		$modules = Module::all();
		return view('core::modules.index', compact('modules'));
	}

	public function show($slug){
		$module = Module::getProperties($slug);
		return view('core::modules.show', compact('module'));
	}

	public function enable($slug){
		Module::enable($slug);
		return redirect()->route('core::modules');
	}

	public function disable($slug){
		Module::disable($slug);
		return redirect()->route('core::modules');
	}

}