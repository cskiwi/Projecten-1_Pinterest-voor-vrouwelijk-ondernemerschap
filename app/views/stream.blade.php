@extends('layouts.master')

@section('pagetitle')
Welcome {{ Auth::user()->username  }}
@stop
@section('scripts')
{{ HTML::script('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js') }}
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
{{ HTML::script('js/jquery.touch-punch.min.js') }}
{{ HTML::script('js/jquery.shapeshift.min.js') }}
{{ HTML::script('js/followBoard.js') }}
{{ HTML::script('js/stream.js') }}
@stop
@section('content')

<div class="pvvoPills">

	<div class="col-md-12">

		<ul class="nav nav-pills">
			
			@foreach (Auth::user()->follows as $board)
			<li class="" id="filter_boards">
				<a href="{{ URL::to('/boards/detail/'.$board->id) }}">
					{{$board->title }}
				</a>
			</li>

			@endforeach
			<li class="pull-right">
				<a class="refresh refreshPill" href="{{ URL::to('/')}}">
					Refresh <span id="newpins" class="badge"></span>
				</a>
			</li>

		</ul>
	</div>
</div>

<div class="well">
	
	<div class="row topOffset">

		<div class="col-md-12">

			<div class="row photos" id="">

				@foreach($pins as $pin)

				<div class="panel panel-default item" date="{{ $pin->created_at }}">

					<div class="hoverContainer">
						@if($pin->type == 'Image')
						<div class="panel-article-header">
							<a class="pvvoThumbUrl" href="#">
                                {{ HTML::image(asset('img/' . $pin->imgLocation), $pin->title , array('class' => 'img-responsive pvvoThumbImg')) }}
							</a>

						</div>
						@endif

						@if($pin->type == 'Text')
						<div class="panel-body">
							<div class="pvvoStreamBody">
								<p>
									<strong>{{ $pin->title }}</strong>
								</p>
								{{ str_limit($pin->description, $limit = 300, $end = '...') }}
							</div>
						</div>

						@endif

                        @if($pin->type == 'Offer')
                        <div class="panel-article-header">
                            <a class="pvvoThumbUrl" href="#">
                                {{ HTML::image(asset('img/' . $pin->imgLocation), $pin->title , array('class' => 'img-responsive pvvoThumbImg')) }}
                            </a>

                        </div>
                        <div class="panel-body">

                            <div class="pvvoStreamBody">
                                <p class="">
                                    <strong>{{ $pin->title }}</strong>
                                </p>
                                <p>{{ str_limit($pin->description, $limit = 300, $end = '...') }}</p>
                            </div>

                        </div>

                        @endif

                        @if($pin->type == 'Video')
                            <iframe class="pvvoStreamVideo" width="100%" src="{{ $pin->description }}" frameborder="0"></iframe>
                        @endif
                        <a class="hoverCaption" href="{{ URL::to('/pins/detail/' . $pin->id)}}">
							View pin
                        </a>

					</div>

                    <div class="panel-footer">
						<div class="btn-group btn-group-xs btn-group-justified pinBtns">

                            <a href="#" class="btn favorite" data="{{$pin->id}}">
								<span class="fa fa-star rightSpacingSmall @if($pin->FavoriteUser()) pvvoPink @endif"></span> <span class="count @if($pin->FavoriteUser()) pvvoPink @endif">{{ count($pin->favorites) }}</span>
							</a>

							<a class="btn comment">
								<span class="fa fa-comment rightSpacingSmall"></span> <span class="count">{{ count($pin->comments) }}</span>
							</a>

                            @if($pin->type == 'Offer')
                            <a class="btn repin">
                                <span class="fa fa-euro rightSpacingSmall"></span> {{ $pin->price }} -  BUY
                            </a>
                            @else
                            <a class="btn repin ">
                                <span class="fa fa-retweet rightSpacingSmall"></span> pin
                            </a>
                            @endif

                        </div>
					</div>
				</div>

				@endforeach
			</div>
		</div>
	</div>




	<div class="row topOffset">

		<div class="col-md-12">

			<div class="row photos suggestion" id="">
				@if (count($pins)  < 1)
				@foreach(Board::take(3)->get() as $board)
				<div class="thumbnail item">

					<div class="caption">
						<div class="media">

							<a class="pull-left" href="#">
								<img class="media-object" src="http://placehold.it/100x100" alt="...">
							</a>


							<div class="media-body pvvoMediaBody">
								<h5 class="media-heading"><a href="{{ URL::to('/boards/detail/' . $board->id)}}"> {{ $board->title }}</a></h5>
								<p>
									<span class="label label-danger"><span class="fa fa-heart rightSpacingSmall"></span> <span class="count">{{ count($board->followers) }}</span></span>
									<span class="label label-warning"><span class="fa fa-pencil rightSpacingSmall"></span> {{ count($board->pins) }}</span>
								</p>
							</div>

							{{ Form::open(array('url' => '#', 'class'=>'form follow-form', 'role' => 'form', 'target' => URL::to("boards"))) }}
							<div class="modal-body">
								<div class="text">
									@if(count(Auth::user()->follows()->where('board_id', '=', $board->id)->first()) > 0)
									{{ Form::submit('unfollow', array('class' => 'btn btn-primary following followButton')) }}
									@else
									{{ Form::submit('follow', array('class' => 'btn btn-primary followButton')) }}
									@endif
									{{ Form::hidden('board_id',$board->id ) }}

								</div>
							</div>
							{{ Form::close() }}

						</div>
					</div>
				</div>
				@endforeach

				@endif


			</div>

		</div>

	</div>
</div>
@stop

