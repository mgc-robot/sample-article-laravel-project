@extends('home')
@section('content')
    <form method="post" action="/articles/store">
        {{ csrf_field() }}
        <div class="row">
            <lable>Title</lable>
            <input type="text" name="title" placeholder="Title">
        </div>
        <div class="row">
            <label>Content</label>
            <textarea name="content" placeholder="Content"></textarea>
        </div>
        <input type="submit" name="submit">
    </form>

    @include('articles._partials')

@stop
