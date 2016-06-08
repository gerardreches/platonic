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

	public function update(){
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
	}

}