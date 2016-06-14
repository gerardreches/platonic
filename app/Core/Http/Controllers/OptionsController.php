<?php

namespace Platonic\Core\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Core\Http\Controllers\Controller;
use Platonic\Core\Models\Option;
use Platonic\Core\Models\OptionGroup;

class OptionsController extends Controller
{
	
	public function index(){
		$groups = OptionGroup::all();
		return view('core::options.index', compact('groups'));
	}

	public function update(Request $request){
		
		foreach ($request->options as $option => $value) {
			Option::where('name', $option)->update($value);
		}
		/*
		$options = OptionGroup::findByName('Site CSS')->first()->options()->get();
		$vars = [];
		foreach($options as $option){
			$vars[$option->name] = $option->value;
		}

		// Compile custom site CSS
		compile_less(
			config('modules.path').'/Core/Resources/Assets/Less/site.less',
			'css/site.css',
			false,
			$vars
		);
		*/

		return back();
	}

}