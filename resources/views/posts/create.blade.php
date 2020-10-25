@extends('layouts.app')

@section('content')
    <h1>Creation d'articles</h1>
    {!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Titre')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titre de l\'article'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Contenu')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Le contenu de votre article ...'])}}
    </div><br>
    <div class="form-group">
        {{ Form::submit('Créer votre article', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection
