<?php

namespace Platonic\Core\Http\Controllers;

use Caffeinated\Modules\Facades\Module;
use Platonic\Core\Http\Controllers\Controller;
use Platonic\Core\Http\Requests\UpdateModuleRequest;

class ModulesController extends Controller
{
	
	public function index(){
		$modules = Module::all();
		return view('core::modules.index', compact('modules'));
	}

	public function show($slug){
		$module = Module::get($slug);
		return view('core::modules.show', compact('module'));
	}

	public function enable(UpdateModuleRequest $request, $slug){
		Module::enable($slug);
		return redirect()->route('dashboard::modules::index');
	}

	public function disable(UpdateModuleRequest $request, $slug){
		if ($slug !== 'core') Module::disable($slug);
		return redirect()->route('dashboard::modules::index');
	}

}