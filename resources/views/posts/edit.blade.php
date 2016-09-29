@extends('main')

@section('title', 'Edit New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}
            {{ Form::label('category_id', 'Category: ') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
            {{ Form::label('tags', 'Tags: ') }}
            {{ Form::select('tags[]', $tags, null, ['class' => 'tag-multiple form-control', 'multiple' => 'multiple']) }}
            {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-4">
            <div class="well">
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
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $(".tag-multiple").select2();
        $(".tag-multiple").select2().val({!! $post->tags()->getRelatedIds() !!}).trigger("change");
    </script>
@endsection