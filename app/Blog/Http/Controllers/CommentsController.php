<?php

namespace Platonic\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Core\Http\Controllers\Controller;

class CommentsController extends Controller
{
	
	public function index(){
		$comments = Comment::all();
		return view('blog::comments.index', compact('comments'));
	}

}