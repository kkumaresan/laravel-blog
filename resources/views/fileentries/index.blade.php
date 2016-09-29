@extends('main')

@section('title', 'All Tags')


@section('content')

    <form action="fileentry/add" method="post" enctype="multipart/form-data">
        <input type="file" name="filefield">
        <input type="submit">
        {!! csrf_field() !!}
    </form>

    <h1> Pictures list</h1>

    <div class="row">

        <ul>
            @foreach($entries as $entry)
                <li>{{$entry->original_filename}}</li>
            @endforeach
        </ul>
    </div>

@stop
