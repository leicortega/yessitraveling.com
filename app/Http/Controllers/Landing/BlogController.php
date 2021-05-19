<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::paginate(9);
        // return dd($posts);
        return view('landing.blog.index', ['posts' => $posts]);
    }
}
