@extends('layouts.app')

@section('content')
<h1>Nouveau post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title">
        <textarea name="content" cols="30" rows="10"></textarea>
        <button type="submit">Créer</button>
    </form>
@endsection
