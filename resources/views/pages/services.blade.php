@extends('layouts.app')

@section('content')
    <h1>Services!</h1>
    @if(count($services)> 0)
        <ul>
        @foreach($services as $items)
            <li>{{$items}}</li>
        @endforeach
        </ul>
    @endif
@endsection