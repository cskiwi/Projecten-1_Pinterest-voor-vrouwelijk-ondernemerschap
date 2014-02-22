@extends('layouts.master')

@section('pagetitle')
Board detail | {{ $board->title }}
@stop

@section('content')
<div>
    <h2>{{ $board->title }}</h2>

    @if(Auth::check())
    @if(Auth::user() == $board->user)
    <a href="{{ URL::TO('boards/'.$board->id.'/remove') }}">Remove board</a>
    @endif
    @endifby

    <a href="{{ URL::TO('/users/profile/'.$board->user->id) }}"> {{$board->user->name}}</a></li>
    @foreach($posts as $post)
    <li><a href="{{ URL::TO('/posts/detail/'.$post->id) }}">{{ $post->title }}</a><p>{{ $post->body }}</p></li>
    @endforeach
</div>

@stop