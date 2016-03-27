<?php
namespace App\Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Modules\Blog\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::all();
		return view('blog::index', compact('posts'));
	}
}
