<?php
namespace Platonic\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Http\Controllers\Controller;
use Platonic\Http\Requests;
use Platonic\Blog\Models\Post;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::all();
		return view('blog::index', compact('posts'));
	}
}
