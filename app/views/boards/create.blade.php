@extends('layouts.master')

@section('pagetitle')
Create board
@stop

@section('content')
@if(Auth::check())

{{ Form::open(array('url' => 'boards/add')) }}

<h1>Add board</h1>
<!-- if there are login errors, show them here -->
<p> {{$errors->first('title')}}
    {{$errors->first('body')}}</p>

<p> {{Form::label('title', 'Title')}}
    {{Form::text('title')}}</p>

<p>{{Form::submit('Submit')}}</p>
{{ Form::close() }}
@endif
@stop