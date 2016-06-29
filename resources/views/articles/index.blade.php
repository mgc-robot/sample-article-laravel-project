@extends('home')

@section('content')

<h1>Shit</h1>

@foreach($articles as $article)
	<h1>{{ $article->title }}</h1>
	<article>{{ $article->content }}</article>
@endforeach

@stop
