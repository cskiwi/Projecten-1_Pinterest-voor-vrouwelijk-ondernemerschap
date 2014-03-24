@extends('layouts.master')

@section('pagetitle')
Post overview
@stop

@section('content')
<div class="container">
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ URL::TO('/posts/detail/'.$post->id) }}">{{ $post->title }}</a>
            by <a href="{{ URL::TO('/users/profile/'.$post->user->id) }}">{{ strlen( $post->user->name) != 0 ? $post->user->name : $post->user->username }} </a>
        </li>
        @endforeach
    </ul>

    <div id="paging">{{ $posts->links() }}</div>

</div>

@stop