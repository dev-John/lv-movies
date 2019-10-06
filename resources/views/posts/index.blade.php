@extends('layouts.app')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="">
                <h2><a href="/posts/{{$post->id}}">{{$post->nomefilme}}</a></h2>
                <h5>{{$post->autorfilme}}</h3>
                <small>Criado em {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Sem filmes cadastrados</p>
    @endif
@endsection