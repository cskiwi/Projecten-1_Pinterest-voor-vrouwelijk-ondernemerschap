@extends('layouts.master')

@section('pagetitle')
Post overview
@stop

@section('content')
<div>
    <ul>
        @foreach($boards as $board)
        <li><a href="./boards/detail/{{$board->id}}">{{ $board->title }}</a> by <a href="{{ URL::TO('/users/profile/'.$board->user->id) }}"> {{$board->user->name}}</a> ( {{ count($board->posts) }} posts) </li>
        @endforeach
    </ul>
</div>

<div id="paging">{{ $boards->links() }}</div>
@stop