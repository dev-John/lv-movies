@extends('layouts.app')

@section('content')
    <h2>{{$post->nomefilme}}</h2>
    <div>
        {{$post->autorfilme}}
    </div>
    <small>Escrito em {{$post->created_at}}</small>
    <a href="/posts/{{$post->id}}/edit" class="">Editar</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Excluir')}}
    {!!Form::close()!!}
@endsection