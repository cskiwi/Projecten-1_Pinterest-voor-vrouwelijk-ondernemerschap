@extends('master')

@section('pagetitle')
users
@stop

@section('content')
@foreach($users as $user)
<p>{{ $user->name }}</p>
@endforeach
@stop