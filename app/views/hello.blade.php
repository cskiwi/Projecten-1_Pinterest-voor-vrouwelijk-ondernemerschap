@extends('layouts.master')

@section('pagetitle')
Welcome page
@stop

@section('content')
<p>Welcome!</p>
<p>Check out the <a href="{{ URL::to('users') }}">Dummy users</a></p>
<p>Check out the <a href="{{ URL::to('posts') }}">Dummy posts</a></p>
<p>Check out the <a href="{{ URL::to('boards') }}">Dummy boards</a></p>

@if(Auth::check())

{{ Form::open(array('url' => 'posts/add')) }}

    <h1>Add post</h1>
    <!-- if there are login errors, show them here -->
    <p> {{$errors->first('title')}}
        {{$errors->first('body')}}</p>

    <p> {{Form::label('title', 'Title')}}
        {{Form::text('title')}}</p>

    <p>{{Form::label('board', 'Board')}}
    <select id="board">
        @foreach(Auth::user()->boards as $user_board)
        <option value="{{$user_board->id}}">{{ $user_board->title }}</option>
        @endforeach
    </select> <a href="{{ URL::to('boards/create') }}">Create board</a> </p>
    <p>{{Form::textarea('body')}}</p>

    <p>{{Form::submit('Submit')}}</p>
{{ Form::close() }}
@endif
@stop