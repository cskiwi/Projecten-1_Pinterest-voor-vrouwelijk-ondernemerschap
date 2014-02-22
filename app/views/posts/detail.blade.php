@extends('layouts.master')

@section('pagetitle')
users
@stop

@section('content')
<div>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
</div>

@stop