@extends('layouts.master')

@section('pagetitle')
Post detail | {{ $post->title }}
@stop

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-6">
            
            <div class="panel panel-default">

                <div class="panel-heading">{{ $post->title }}</div>

                <div class="panel-body">
                    @if($post->type == 'Image')
                        <img class="img-responsive" src="{{ URL::asset('/img/' . $post->imgLocation) }}" >
                    @endif
                        
                    @if($post->type == 'Text')
                        {{ $post->description }}
                    @endif
                </div>

            </div>


        </div>

    </div>

    <h2></h2>Fav: {{count($post->favorites)}}</li>
    by <a href="{{ URL::TO('/users/profile/'.$post->user->id) }}">{{ strlen( $post->user->name) != 0 ? $post->user->name : $post->user->username }} </a>

    @if(Auth::check())
    @if(Auth::user() == $post->user)
    <a href="{{ URL::TO('/posts/delete/'.$post->id) }}">remove</a>
    @endif
    @endif

    <p>{{ $post->body }}</p>

    <h2>Member of the following boards</h2>
    @foreach($post->boards as $board)
    <li><a href="{{ URL::TO('/boards/detail/'.$board->id) }}">{{ $board->title }}</a>
        @if(Auth::check())
        @if(Auth::user() == $post->user)
        <a href="{{ URL::TO('/boards/'.$board->id.'/removepost/'.$post->id) }}">remove</a>
        @endif
        @endif
    </li>
    @endforeach

    @if(Auth::check())
    <h2>Add to board</h2>(rewrite to ajax!)

    @if( count(Auth::user()->boards) > 1)
    <h3>Existing board</h3>
    {{ Form::open(array('url' => 'post/addtoboard')) }}
    <p>{{Form::label('board', 'Board')}}
        <select id="board">
            @foreach(Auth::user()->boards as $user_board)
            <option value="{{$user_board->id}}">{{ $user_board->title }}</option>
            @endforeach
        </select></p>
    <p>{{ Form::submit('Submit!') }}</p>
    {{ Form::close() }}
    @endif
    @endif
    <h3>Create board</h3>
    {{ Form::open(array('url' => 'boards/Add/', 'method' => 'post')) }}
    <p>{{Form::label('board', '')}}
        {{Form::text('board') }}
    {{ Form::submit('Create!') }}</p>
    {{ Form::close() }}

    <h2>Comments</h2>
    <ul>
        @foreach($post->comments as $comment)
        <li>{{$comment->content}}</li>
        @endforeach
    </ul>
</div>

@stop