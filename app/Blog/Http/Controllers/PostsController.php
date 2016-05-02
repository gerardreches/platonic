<?php

namespace Platonic\Blog\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Platonic\Blog\Models\Post;
use Platonic\Core\Http\Controllers\Controller;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::latest('published_at')->published()->get();
		return view('blog::posts.index', compact('posts'));
	}

	public function show(){
		$post = Post::findOrFail($id);

		return view('blog::posts.show', compact('post'));
	}

	public function create(){
		return view('blog::posts.create');
	}
}
