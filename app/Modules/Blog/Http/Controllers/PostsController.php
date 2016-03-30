<?php
namespace Platonic\Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Platonic\Http\Controllers\Controller;
use Platonic\Http\Requests;
use Platonic\Modules\Blog\Models\Post;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::all();
		return view('blog::index', compact('posts'));
	}
}
