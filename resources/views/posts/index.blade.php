@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    <hr>
    <a href="/posts/create" class="btn btn-primary">Créer un nouvel article</a><br><br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>écrit le {{ $post->created_at }}</small><br>
                <a class="btn btn-secondary" href="/posts/{{ $post->id }}">Lire la suite  ...</a>
            </div><br>
            <hr>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>Aucun article existant!</p>
    @endif
@endsection
