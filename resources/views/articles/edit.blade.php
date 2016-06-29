@extends('home')
@section('content')
    <form method="post" action="/articles/update">
        {{ csrf_field() }}
        <div class="row">
            <lable>Title</lable>
            <input type="text" name="title" placeholder="Title" value="{{ $article->title }}">
            <input type="hidden" name="slug" value="{{ $article->slug }}">
        </div>
        <div class="row">
            <label>Content</label>
            <textarea name="content" placeholder="Content">{{ $article->content }}</textarea>
        </div>
        <input type="submit" name="submit">
    </form>

    @include('articles._partials')
@stop
