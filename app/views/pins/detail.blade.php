@extends('layouts.master')

@section('scripts')
{{ HTML::script('js/detail.js') }}

@stop

@section('pagetitle')
Post detail | {{ $pin->title }}
@stop

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-8">

            <div class="panel panel-default">

                <div class="panel-heading">{{ $pin->title }}</div>

                @if($pin->type == 'Image')
                <div class="panel-body pinDetailBodyImg">
                    <img class="img-responsive pvvoThumbImg" src="{{ URL::asset('/img/' . $pin->imgLocation) }}" >

                </div>
                @if($pin->description != '')
                <div class="panel-body">
                    {{ $pin->description }}
                </div>
                @endif
                @endif

                @if($pin->type == 'Text')
                <div class="panel-body">
                    {{ $pin->description }}
                </div>
                @endif
            </div>

        </div>

        <div class="col-md-4">
            <div class="well">
                <p>
                    Pin by <a href="{{ URL::TO('/users/profile/'.$pin->user->id) }}">{{ strlen( $pin->user->name) != 0 ? $pin->user->name : $pin->user->username }} </a>
                </p>



                <h4 class="statLbl">Favourites</h4>
                <span id="fav-count"> {{count($pin->favorites)}}</span>

            </div>


            <button type="button" id="favorited"  class="btn btn-info favorite" data="{{$pin->id}}" @if(!$pin->FavoriteUser()) style="display: none;" @endif><span class="fa fa-star rightSpacingSmall"></span> Favourited</button>
            <button type="button" id="not-favorited" class="btn btn-default favorite" data="{{$pin->id}}" @if($pin->FavoriteUser()) style="display: none;" @endif><span class="fa fa-star rightSpacingSmall"></span> Favourite</button>
            <button type="button" class="btn btn-default"><span class="fa fa-retweet rightSpacingSmall"></span> pin</button>

            @if(Auth::check())
            @if(Auth::user() == $pin->user)
            <a href="{{ URL::TO('/pins/delete/'.$pin->id) }}" type="button" class="btn btn-danger"><span class="fa fa-times rightSpacingSmall"></span> remove pin</a>
            @endif
            @endif


        </div>
    </div>


    <h2></h2>Fav: </li>
    by <a href="{{ URL::TO('/users/profile/'.$pin->user->id) }}">{{ strlen( $pin->user->name) != 0 ? $pin->user->name : $pin->user->username }} </a>



    <p>{{ $pin->body }}</p>

    <h2>Member of the following boards</h2>
    @foreach($pin->boards as $board)
    <li><a href="{{ URL::TO('/boards/detail/'.$board->id) }}">{{ $board->title }}</a>
        @if(Auth::check())
        @if(Auth::user() == $pin->user)
        <a href="{{ URL::TO('/boards/'.$board->id.'/removepin/'.$pin->id) }}">remove</a>
        @endif
        @endif
    </li>
    @endforeach

    @if(Auth::check())
    <h2>Add to board</h2>(rewrite to ajax!)

    @if( count(Auth::user()->boards) > 1)
    <h3>Existing board</h3>
    {{ Form::open(array('url' => 'pin/addtoboard')) }}
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
    {{ Form::open(array('url' => 'boards/Add/', 'method' => 'pin')) }}
    <p>{{Form::label('board', '')}}
        {{Form::text('board') }}
        {{ Form::submit('Create!') }}</p>
    {{ Form::close() }}

    <h2>Comments</h2>
    <ul>
        @foreach($pin->comments as $comment)
        <li>{{$comment->content}}</li>
        @endforeach
    </ul>
</div>

@stop