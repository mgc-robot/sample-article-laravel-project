@extends('home')

@section('content')
    <h2>{{ $article->title }}</h2>
    <article> {{ $article->content }}</article>

    @include('articles._partials')

@stop
