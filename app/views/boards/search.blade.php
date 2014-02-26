@extends('layouts.master')

@section('pagetitle')
Board overview
@stop

@section('content')
<div>
    <ul>
        @foreach($boards as $board)
        <li><a href="./detail/{{$board->id}}">{{ $board->title }}</a> by <a href="{{ URL::TO('/users/profile/'.$board->user->id) }}"> {{$board->user->name}}</a> ( {{ count($board->posts) }} posts) </li>
        @foreach($board->Followers() as $follower)
        {{ var_dump($follower) }}
        @endforeach
        @endforeach
    </ul>
</div>

@stop