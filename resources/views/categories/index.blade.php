@extends('main')

@section('title', 'All Categories')


@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Categories</h1>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ date('M j, Y', strtotime($category->created_at)) }}</td>
                        <td>{{ date('M j, Y', strtotime($category->updated_at)) }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="well">
                {!! Form::open(array('route' => 'categories.store', 'method' => 'POST')) !!}
                <h3>New Category</h3>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="New Name" name="name">
                </div>
                <button class="btn btn-success btn-block m-t-md" type="submit">Create New Category</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop
