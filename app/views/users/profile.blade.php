@extends('layouts.master')

@section('pagetitle')
User detail | {{ $user->name }}
@stop

@section('content')

    <p>{{ $user->name }}</p>

<h2>Has made the following boards</h2>
<ul>
@foreach($user->boards as $user_board)
    <li><a href="{{ URL::TO('/boards/detail/'.$user_board->id) }}">{{ $user_board->title }}</a> ( {{ count($user_board->posts) }} posts) </li>
@endforeach
</ul>

<h2>Has made the following posts</h2>
<ul>
    @foreach($user->posts as $user_post)
    <li><a href="{{ URL::TO('/posts/detail/'.$user_post->id) }}">{{ $user_post->title }}</a> ( in {{ count($user_post->boards) }} boards) </li>
    @endforeach
</ul>

<h2>Follows following boards</h2>
<ul>
    @foreach($user->follows as $board)
    <li><a href="{{ URL::TO('/boards/detail/'.$board->id) }}">{{ $board->title }}</a> ( has {{ count($board->posts) }} posts) </li>
    @endforeach
</ul>
@stop