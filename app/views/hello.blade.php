@extends('layouts.master')

@section('pagetitle')
Welcome page
@stop

@section('content')
<p>Welcome!</p>
<p>Check out the <a href="{{ URL::to('users') }}">Dummy users</a></p>
<p>Check out the <a href="{{ URL::to('posts') }}">Dummy posts</a></p>

@stop