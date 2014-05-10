@extends('layouts.master')

@section('pagetitle')
Board detail | {{ $board->title }}
@stop

@section('scripts')
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
{{ HTML::script('js/jquery.touch-punch.min.js') }}
{{ HTML::script('js/jquery.shapeshift.min.js') }}
{{ HTML::script('js/followBoard.js') }}
{{ HTML::script('js/stream.js') }}
@stop

@section('content')

<div class="jumbotron pvvoJumboBoard" style="background: url('') no-repeat  fixed;">
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


    <div class="row topOffset">
        <div class="col-md-12">
            <div class="row photos" id="">

                @foreach($board->pins as $pin)
                    @include('partial.pinboard')
                @endforeach

            </div>
        </div>
    </div>
</div>


@stop