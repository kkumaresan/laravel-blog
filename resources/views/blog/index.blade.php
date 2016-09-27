@extends('main')

@section('title', 'View Post')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Blog</h1>
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <h5>Published: {{ date('M j, Y g:i A', strtotime($post->created_at)) }}</h5>
                    <p>{{ substr($post->body, 0, 200) }}{{ strlen($post->body) > 200 ? "..." : "" }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                </div>

                <hr>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            {!! $posts->links() !!}
        </div>
    </div>


@stop
