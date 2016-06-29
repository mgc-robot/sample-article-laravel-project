@extends('home')

@section('content')

    <h1>Articles</h1>
    <br/>
    <a href="{{ url('/articles/new')  }}">Add new Article</a>

    @foreach($articles as $article)
        <a href="{{ url('/articles/'. $article->slug) }}"><h3>{{ $article->title }}</h3></a>
        <article>{{ $article->content }}</article>
        <a href="{{ url('/articles/'. $article->slug . '/edit') }}">edit</a>
        <a href="{{ url('/articles/delete/'. $article->id) }}">delete</a>
    @endforeach

@stop
