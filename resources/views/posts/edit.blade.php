@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $posts->id],'method'=> 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form">
            {{Form::label('title','Title')}}<br/>
            {{Form::text('title', $posts->title,['class' => 'text-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form">
            {{Form::label('body','Body')}}<br/>
            {{Form::textarea('body', $posts->body ,['class' => 'text-control', 'placeholder' => 'Body Text', 'id' => 'article-ckeditor'])}}
        </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        {{Form::file('cover_image')}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn-Submit'])}}
    {!! Form::close() !!}
@endsection
