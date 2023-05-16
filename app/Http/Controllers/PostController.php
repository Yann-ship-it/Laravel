<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('title')->get();
        $video = Video::find(1);

        return view('articles', [
            'posts' => $posts,
            'video' => $video
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

    public function register() {
        $post = Post::find(1);
        $video = Video::find(1);

        $comment1 = new Comment(['content' => 'Premier commentaire']);
        $comment2 = new Comment(['content' => 'Deuxième commentaire']);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $comment3 = new Comment(['content' => 'Troisième commentaire']);
        $video->comments()->save($comment3);
    }
}
