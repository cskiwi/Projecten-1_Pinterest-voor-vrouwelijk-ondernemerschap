@extends('layouts.master')

@section('pagetitle')
users
@stop

@section('content')
<div>
    <ul>
        @foreach($posts as $post)
        <li><a href="./posts/detail/{{$post->id}}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>

<div id="paging">{{ $posts->links() }}</div>
@stop