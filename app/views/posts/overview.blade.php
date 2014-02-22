@extends('layouts.master')

@section('pagetitle')
Post overview
@stop

@section('content')
<div>
    <ul>
        @foreach($posts as $post)
        <li><a href="{{ URL::TO('/posts/detail/'.$post->id) }}">{{ $post->title }}</a> by <a href="{{ URL::TO('/users/profile/'.$post->user->id) }}"> {{$post->user->name}}</a></li>
        @endforeach
    </ul>
</div>

<div id="paging">{{ $posts->links() }}</div>
@stop