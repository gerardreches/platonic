<?php
namespace Platonic\Modules\Blog\Http\Controllers;

use Platonic\Http\Controllers\Controller;
use Platonic\Http\Requests;
use Platonic\Modules\Blog\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::all();
		return view('blog::index', compact('posts'));
	}
}
