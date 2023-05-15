@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>

    @forelse ($post->comments as $comment)
        <h2 style="font-style: italic">{{  $comment->content }} envoyé le {{ $comment->created_at->format('d/m/Y') }}</h2>
    @empty
        <span>Aucun commentaire pour ce post</span>
    @endforelse
@endsection


