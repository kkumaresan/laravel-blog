@extends('main')

@section('title', 'Edit Tags')


@section('content')

    {!! Form::open(array('route' => ['tags.update', $tag->id], 'method' => 'PUT')) !!}
        <div class="form-group">
            <label for="name">Edit Tag</label>
            <input type="text" class="form-control" name="name" placeholder="Tag" value="{{ $tag->name }}">
        </div>
        <button type="submit" class="btn btn-default">Save Changes</button>
    {!! Form::close() !!}

@endsection
