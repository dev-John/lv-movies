@extends('layouts.app')

@section('content')
    <h5>Editar publicação</h5>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nomefilme', 'Título')}}
            {{Form::text('nomefilme', $post->nomefilme, ['class' => 'form-control', 'placeholder' => 'Título'])}}
        </div>
        <div class="form-group">
            {{Form::label('autorfilme', 'Diretor')}}
            {{Form::text('autorfilme', $post->autorfilme, ['class' => 'form-control', 'placeholder' => 'Título'])}}
        </div>
        @method('PUT')
        {{Form::submit('submit', ['class'=>''])}}
    {!! Form::close() !!}
@endsection