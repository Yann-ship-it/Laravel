<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('articles', [
            'posts' => $posts
        ]);
    }
    public function show($id) {

         $post = Post::findOrFail($id);
        return view('article',[
            'post' => $post
        ]);
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        dd('WP');

    }

    public function create() {
        return view ('form');
    }
    public function contact() {
        return view ('contact');
    }
}
