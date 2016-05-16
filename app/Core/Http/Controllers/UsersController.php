<?php

namespace Platonic\Core\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Core\Http\Controllers\Controller;
use Platonic\Core\Models\User;

class UsersController extends Controller
{
	
	public function index(){
		$users = User::all();
		return view('core::users.index', compact('users'));
	}
	/*
	public function show($id){
		$user = User::find($id)->get();
		return view('core::users::show', compact('user'));
	}
	*/


}