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

<div class="row pvvoPills">
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
					Refresh <span id="newposts" class="badge"></span>
				</a>
			</li>

		</ul>
	</div>
</div>
		
<div class="well">
	
	<div class="row topOffset">

		<div class="col-md-12">

			<div class="row photos" id="">

				@foreach($posts as $post)
				
				<div class="panel panel-default item" date="{{ $post->created_at }}">
				
					<div class="hoverContainer">
						@if($post->type == 'Image')
						<div class="panel-article-header">
							<a class="pvvoThumbUrl" href="#">
								<!-- style="background:url('./img/{{ $post->imgLocation}}') no-repeat center center;" -->
								<img class="img-responsive pvvoThumbImg" src="./img/{{ $post->imgLocation}}" >
							</a>
							
						</div>
						@endif
						
						@if($post->type == 'Text')
						<div class="panel-body">
							<div class="pvvoStreamBody">
								<p>
									<strong>{{ $post->title }}</strong>
								</p>
								{{ str_limit($post->description, $limit = 300, $end = '...') }}
							</div>	
						</div>

						@endif
                        <a class="hoverCaption" href="{{ URL::to('/posts/detail/' . $post->id)}}">
							Read more...
                        </a>
					
					</div>

                    <div class="panel-footer">
						<div class="btn-group btn-group-xs btn-group-justified pinBtns">

                            <a href="#" class="btn favorite" data="{{$post->id}}">
								<span class="fa fa-heart rightSpacingSmall"></span> <span class="count">{{ count($post->favorites) }} @if($post->FavoriteUser())*@endif</span>
							</a>

							<a class="btn comment">
								<span class="fa fa-comment rightSpacingSmall"></span> <span class="count">{{ count($post->comments) }}</span>
							</a>
							
							<a class="btn repin">
								<span class="fa fa-retweet rightSpacingSmall"></span> pin
							</a>

                        </div>
					</div>
				</div>

				@endforeach
			</div>
		</div>
	</div>

	<!--</div>

	orderBy(DB::raw('RAND()'))->get
	-->
	<div class="row topOffset">

		<div class="col-md-12">

			<div class="row photos suggestion" id="">
				@if (count($posts)  < 1)
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
									<span class="label label-warning"><span class="fa fa-pencil rightSpacingSmall"></span> {{ count($board->posts) }}</span>
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

				<!-- <div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<img src="http://localhost/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/img/01.jpg" alt="...">
											<div class="caption">
												<h3>Pin</h3>
												<p>...</p>
												<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
											</div>
										</div>
									</div>-->
			</div>

		</div>

	</div>

</div>

@stop

