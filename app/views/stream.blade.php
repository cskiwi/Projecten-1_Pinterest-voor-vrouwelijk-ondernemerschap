@extends('layouts.master')

@section('pagetitle')
Welcome {{ Auth::user()->username  }}
@stop
@section('scripts')
{{ HTML::script('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js') }}
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
{{ HTML::script('js/jquery.touch-punch.min.js') }}
{{ HTML::script('js/jquery.shapeshift.min.js') }}
{{ HTML::script('js/stream.js') }}
@stop
@section('content')

<div class="well">

    <div class="">

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="" id="filter_boards">
                        <a href="#" filter-data="all">
                            <!--<span class="badge pull-right">2 new</span>-->
                            All
                        </a>
                    </li>
                    @foreach (Auth::user()->follows as $board)
                    <li class="" id="filter_boards">
                        <a href="{{ URL::to('/boards/detail/'.$board->id) }}">
                            <!--<span class="badge pull-right">2 new</span>-->
                            {{$board->title }}
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="row topOffset">

            <div class="col-md-12">

                <div class="row photos" id="">
				
                    @foreach($posts as $post)
			
					
                   <!-- <div class="col-md-3 col-sm-4 col-xs-12 item">-->
					
                        <div class="thumbnail item">
						
							@if($post->type == 'text')
							
								{{ $post->body }}
								
							@elseif($post->type == 'photo')
							
								<a class="" href="#">
									<img class="img-responsive pvvoThumbImg" style="background:url('./img/{{$post->body}}') no-repeat center center;">
								</a>
								
							@endif
							
                            <div class="caption">
                                <div class="media">

                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="...">
                                    </a>
									
                                    <div class="media-body pvvoMediaBody">
                                        <h5 class="media-heading"><a href=" {{ URL::to('/posts/detail/' . $post->id)}}"> {{ $post->title }}</a></h5>
										<p>
											<span class="label label-danger"><span class="fa fa-heart rightSpacingSmall"></span> {{ count($post->favorites) }}</span>
											<span class="label label-warning"><span class="fa fa-comment rightSpacingSmall"></span> {{ count($post->comments) }}</span>
											</p>
                                    </div>
									
                                </div>
                            </div>
                        </div>
						

                    <!--</div>-->



                    @endforeach
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
</div>

@stop

