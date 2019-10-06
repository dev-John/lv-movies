@extends('layouts.app')

@section('content')
    <h5>Cadastrar Filme</h5>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nomefilme', 'Título')}}
            {{Form::text('nomefilme', '', ['class' => 'form-control', 'placeholder' => 'Título'])}}
        </div>
        <div class="form-group">
            {{Form::label('autorfilme', 'Diretor')}}
            {{Form::text('autorfilme', '', ['class' => 'form-control', 'placeholder' => 'Título'])}}
        </div>
        {{Form::submit('submit', ['class'=>''])}}
    {!! Form::close() !!}
@endsection