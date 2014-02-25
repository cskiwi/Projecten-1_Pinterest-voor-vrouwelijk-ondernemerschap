@extends('layouts.master')

@section('pagetitle')
Board detail | {{ $board->title }}
@stop

@section('scripts')
{{ HTML::script('js/board.js') }}
@stop

@section('content')

<div>
    <h2>{{ $board->title }}</h2>Followers: {{count($board->followers)}}

    @if(Auth::check())
    {{ Form::open(array('url' => '#', 'class'=>'form', 'role' => 'form', 'id' => 'follow-form')) }}
    <div class="modal-body">
        <div class="text">
            @if($following != -1)
            {{ Form::submit('unfollow', array('class' => 'btn btn-primary following', 'id' => 'followButton')) }}
            {{ Form::hidden('id',$following ) }}
            @else
            {{ Form::submit('follow', array('class' => 'btn btn-primary', 'id' => 'followButton')) }}
            {{ Form::hidden('id',$board->id ) }}
            @endif
        </div>
    </div>
    {{ Form::close() }}

    @if(Auth::user() == $board->user)
        <a href="{{ URL::TO('boards/'.$board->id.'/remove') }}">Remove board</a>
    @endif
    @endifby

    <a href="{{ URL::TO('/users/profile/'.$board->user->id) }}"> {{$board->user->name}}</a></li>
    @foreach($posts as $post)
    <li><a href="{{ URL::TO('/posts/detail/'.$post->id) }}">{{ $post->title }}</a><p>{{ $post->body }}</p></li>
    @endforeach
</div>

@stop