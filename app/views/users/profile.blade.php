@extends('layouts.master')

@section('pagetitle')
User detail | {{ $user->name }}
@stop

@section('content')
<div>
    <p>{{ $user->name }}</p>
</div>

@stop