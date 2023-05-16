@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>
    <span>{{ $post->image ? $post->image->path : "Aucune image" }}</span>

   @forelse ($post->comments as $comment)
        <div>
            <h2 class="postCom">{{  $comment->content }} <br>
                <span class="send">envoyé le {{ $comment->created_at->format('d/m/Y') }} à {{ now()->format('H:i') }}</span>
            </h2>
        </div>
    @empty
        <span>Aucun commentaire pour ce post</span>
    @endforelse

    <hr>
    @forelse($post->tags as $tag)
        <span>{{ $tag->name }}</span>
    @empty
        <span>Aucun tag</span>
    @endforelse

@endsection


