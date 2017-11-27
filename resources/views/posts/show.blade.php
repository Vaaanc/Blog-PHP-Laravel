@extends('layouts.app')

@section('content')
    <a href="/posts" class="back-btn">Back</a>
    <h1>{{$posts->title}}</h1>
    <div class="row">
        <div class="col-5">
        <img src="/storage/cover_images/{{$posts->cover_image}}" style="width:100%"/>
        </div>
    </div>
    
    <small>Written on {{$posts->created_at}}</small>
    <div>
        {!!$posts->body!!}
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
            <a href ="/posts/{{$posts->id}}/edit" class="btn">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'Post'])!!}
        
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete',['class' => 'btn'])}}
    {!!Form::close()!!}
        @endif
    @endif
@endsection
