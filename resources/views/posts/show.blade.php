@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <small>écrit le {{ $post->created_at }}</small>
    <hr>
    <p>{{!! $post->body !!}}</p>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Editer l'article</a><br>
    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
    @method('DELETE')
    {{ Form::submit('Supprimer', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
@endsection
