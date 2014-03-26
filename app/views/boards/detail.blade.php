@extends('layouts.master')

@section('pagetitle')
Board detail | {{ $board->title }}
@stop

@section('scripts')
{{ HTML::script('js/followBoard.js') }}
@stop

@section('content')


@if(Auth::check())

<div class="jumbotron pvvoJumboBoard">
	<div class="container">
		<h1>{{ $board->title }}</h1>
		<p>Followers: {{count($board->followers)}}</p>
		<p>
			{{ Form::open(array('url' => '#', 'class'=>'form follow-form', 'role' => 'form', 'target' => URL::to("boards"))) }}
				<div class="text">
				@if(count(Auth::user()->follows()->where('board_id', '=', $board->id)->first()) > 0)
				{{ Form::submit('unfollow', array('class' => 'btn btn-primary following followButton')) }}
				@else
				{{ Form::submit('follow', array('class' => 'btn btn-primary followButton')) }}
				@endif
				{{ Form::hidden('board_id',$board->id ) }}
				</div>
			{{ Form::close() }}
		</p>
	</div>
</div>

<div class="well">

    @if(Auth::user() == $board->user)
        <a href="{{ URL::TO('boards/'.$board->id.'/remove') }}">Remove board</a>
    @endif
    @endifby

    <a href="{{ URL::TO('/users/profile/'.$board->user->id) }}"> {{$board->user->name}}</a></li>
    @foreach($board->posts as $post)
    <li><a href="{{ URL::TO('/posts/detail/'.$post->id) }}">{{ $post->title }}</a><p>{{ $post->body }}</p></li>
    @endforeach
</div>

@stop