<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('title')->get();

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

    public function create() {
        return view ('form');
    }

    public function store(Request $request) {

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        dd('WP');

    }

    public function contact() {
        return view ('contact');
    }
}
