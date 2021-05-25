<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::paginate(9);
        // return dd($posts);
        return view('landing.blog.index', ['posts' => $posts]);
    }

    //------------------------------
    //|    ver post 
    //------------------------------

    public function show_post($slug){
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $latest_post = Post::latest()->take(3)->get();
        // return dd($post);
        return view('landing.blog.ver', compact('post', 'latest_post'));
    }

    /*
    |-------------------------------
    |       comentarios
    |-------------------------------
    */

    public function comentar(Request $request){
        $comment = Comment::create([
            'nombre' => $request['name'],
            'correo' => $request['email'],
            'comentario' => $request['message'],
            'posts_id' => $request['post_id']
        ]);
        return redirect()->back();
    }
}
