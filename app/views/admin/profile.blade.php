@extends('layouts.master')

@section('pagetitle')
users
@stop

@section('content')
<div id="admin">
    <ul>
        <li>{{ Auth::user()->name  }}</li>
        <li>{{ Auth::user()->username  }}</li>
        <li>{{ Auth::user()->email  }}</li>
        <li>{{ Auth::user()->updated_at  }}</li>
    </ul>
</div>

@stop