@extends('layouts.app')

@section('content')
    <h1>Modifier l'article</h1>
    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
    @method('PUT')
    <div class="form-group">
        {{Form::label('title', 'Titre')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre de l\'article'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Contenu')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Le contenu de votre article ...'])}}
    </div><br>
    <div class="form-group">
        {{ Form::submit('Modifier votre article', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection
