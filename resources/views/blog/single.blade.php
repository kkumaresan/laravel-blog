@extends('main')

@section('title', "$post->title")


@section('content')

    <div class="row">
        <div class="col-md-8 col-lg-offset-2">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
            <hr>
            <p>Posted In: {{ $post->category->name }}</p>
        </div>
    </div>


@stop
