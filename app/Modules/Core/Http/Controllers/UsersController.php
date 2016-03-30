<?php

namespace Platonic\Modules\Core\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	
	public function index(){
		
		return view('users.index', compact('users'));
	}

	public function show($id){
		
		return view('users.show', compact('user'));
	}


}