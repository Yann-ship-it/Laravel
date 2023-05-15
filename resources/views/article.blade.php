@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>
    <span>{{ $post->image ? $post->image->path : "Aucune image" }}</span>
    @forelse ($post->comments as $comment)

        <div>
            <h2 style="font-style: italic">{{  $comment->content }} envoyé le {{ $comment->created_at->format('d/m/Y') }}</h2>
        </div>
    @empty
        <span>Aucun commentaire pour ce post</span>
    @endforelse
@endsection


