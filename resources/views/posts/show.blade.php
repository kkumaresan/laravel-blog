@extends('main')

@section('title', 'View Post')


@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
            <hr>
            <div class="tag">
                @foreach($post->tags as $tag)
                    <span class="label label-default">{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl>
                    <dt>URL Slug:</dt>
                    <dd><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></dd>
                </dl>
                <dl>
                    <dt>Created at</dt>
                    <dd>{{ date('M j, Y g:i A', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl>
                    <dt>Last updated</dt>
                    <dd>{{ date('M j, Y g:i A', strtotime($post->updated_at)) }}</dd>
                </dl>
                <dl>
                    <dt>Category</dt>
                    <dd>{{ $post->category->name }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-block btn-default" href="{{ route('posts.index') }}"><< See all posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
