@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store','method'=> 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form">
            {{Form::label('title','Title')}}<br/>
            {{Form::text('title','',['class' => 'text-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form">
            {{Form::label('body','Body')}}<br/>
            {{Form::textarea('body','',['class' => 'text-control', 'placeholder' => 'Body Text', 'id' => 'article-ckeditor'])}}
        </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        {{Form::label('title','Image Cover')}}
        {{Form::file('cover_image',['class' => 'btn-image'])}}
        {{Form::submit('Submit', ['class' => 'btn-Submit'])}}
    {!! Form::close() !!}
@endsection
