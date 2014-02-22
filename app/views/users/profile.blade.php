@extends('layouts.master')

@section('pagetitle')
users
@stop

@section('content')
<div>
    <p>{{ $user->name }}</p>
</div>

@stop