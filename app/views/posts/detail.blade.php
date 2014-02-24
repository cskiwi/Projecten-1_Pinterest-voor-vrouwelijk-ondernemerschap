@extends('layouts.master')

@section('pagetitle')
Post detail | {{ $post->title }}
@stop

@section('content')
<div>
    <h2>{{ $post->title }}</h2>Fav: {{count($post->favorites)}}</li>
    by <a href="{{ URL::TO('/users/profile/'.$post->user->id) }}">{{ strlen( $post->user->name) != 0 ? $post->user->name : $post->user->username }} </a>

    @if(Auth::check())
    @if(Auth::user() == $post->user)
    <a href="{{ URL::TO('/posts/delete/'.$post->id) }}">remove</a>
    @endif
    @endif

    <p>{{ $post->body }}</p>

    <h2>Member of the following boards</h2>
    @foreach($post->boards as $board)
    <li><a href="{{ URL::TO('/boards/detail/'.$board->id) }}">{{ $board->title }}</a>
        @if(Auth::check())
        @if(Auth::user() == $post->user)
        <a href="{{ URL::TO('/boards/'.$board->id.'/removepost/'.$post->id) }}">remove</a>
        @endif
        @endif
    </li>
    @endforeach

    @if(Auth::check())
    <h2>Add to board</h2>

    {{ Form::open(array('url' => 'post/addtoboard')) }}
    <p>{{Form::label('board', 'Board')}}
        <select id="board">
            @foreach(Auth::user()->boards as $user_board)
            <option value="{{$user_board->id}}">{{ $user_board->title }}</option>
            @endforeach
        </select></p>
    <p>{{ Form::submit('Submit!') }}</p>
    {{ Form::close() }}
    @endif


    <h2>Comments</h2>
    @foreach($post->comments as $comment)
    <div>{{$comment->content}}</div>

    @endforeach
</div>

@stop