@extends('layouts.app')

@section('content')
    <h1>List des articles</h1>
        @if($posts->count() > 0)
            @foreach($posts as $post)
                <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
            @endforeach
        @else
            <span>Aucun article n'est mis en ligne !</span>
        @endif

    <h1>Liste des vidéos</h1>
    @forelse ($video->comments as $comment)
        <div>
            <h2 class="postCom">{{ $comment->content }} envoyé le {{ $comment->created_at->format('d/m/Y') }} à {{ now()->format('H:i') }}
            </h2>
        </div>
    @empty
        <span>Aucun commentaire pour cette vidéo</span>
    @endforelse
@endsection
