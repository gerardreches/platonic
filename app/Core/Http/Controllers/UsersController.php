<?php

namespace Platonic\Core\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Core\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Platonic\Core\Http\Controllers\Controller;

class UsersController extends Controller
{
	
	public function index(){
		$users = User::all();
		return view('core::users.index', compact('users'));
	}
	
	public function show(User $user){
		return view('core::users.show', compact('user'));
	}
	
	public function edit(User $user){

		if($user != Auth::user() or Gate::denies('edit-users', Auth::user() ) ){
			abort(403);
		}
		return view('core::users.edit', compact('user'));
	}

}