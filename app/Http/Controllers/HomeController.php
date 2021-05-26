<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    /*
    *@ Render home page
    */
    public function index()
    {
        $posts = Post::paginate(3);
        $posts_ultimos = Post::latest()->take(3)->get();
        $cats = Category::orderBy('category')->get();
    	return view('landing.index', compact('posts', 'cats', 'posts_ultimos'));
    	// return view('home.index', compact('posts', 'cats'));
    }

    /*
    *@ Render post page
    */
    public function post($slug)
    {
        $findPost = Post::where('slug', '=', $slug);
        $post = Post::find($findPost->value('id'));
        $cats = Category::orderBy('created_at', 'desc')->get();
    	return view('home.post', compact('post', 'cats'));
    }

    /*
    *@ search post
    */
    public function search(Request $request)
    {
        $word = $request->s;

        $posts = Post::where('title','like','%'.$word.'%')->orderBy('created_at')->get();

        $cats = Category::orderBy('created_at', 'desc')->get();

        return view('home.searchPost', compact('posts', 'word', 'cats'));
    }

    /*
    *@ search post by category
    */
    public function searchByCats($cat)
    {
        $word = $cat;

        $posts = Post::where('post_category', '=', $word)->orderBy('created_at')->get();

        $cats = Category::orderBy('created_at', 'desc')->get();

        return view('home.searchPost', compact('posts', 'word', 'cats'));
    }
}
