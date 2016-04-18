<?php

namespace Platonic\Core\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Core\Http\Controllers\Controller;

class UsersController extends Controller
{
	
	public function index(){
		$users = User::all();
		return view('users.index', compact('users'));
	}

	public function show($id){
		$user = User::find($id)->get();
		return view('users.show', compact('user'));
	}


}