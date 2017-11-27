@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @guest
        @else
        <a href="/posts/create">Create Post</a>
    @endguest
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="row posts">
                <div class="col-4">
                    <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%"/>
                </div>
                <div class="col-8">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>{{$post->created_at}}</small>
                </div>
            </div>
        @endforeach
        <!--pagination-->
        {{$posts->links()}}
    @else
        <h1>No Posts Found</h1>
    @endif
@endsection
