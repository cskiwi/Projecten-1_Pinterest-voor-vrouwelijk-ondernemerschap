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
{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}
{{ HTML::script('js/bootstrap-wysihtml5-0.0.2.min.js') }}
@stop
@section('content')

<div class="well">

    <div class="">

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="">
                        <a class="refresh" href="{{URL::to('/');}}">Refresh<span class="badge pull-right" id="newposts" hidden>2</span></a>
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
				
				
<textarea id="some-textarea" placeholder="Enter text ...">zeaez</textarea>
<script type="text/javascript">
	$('#some-textarea').wysihtml5();
</script>
            </div>
        </div>

        <div class="row topOffset">

            <div class="col-md-12">

                <div class="row photos" id="">

                    @foreach($posts as $post)


                    <!-- <div class="col-md-3 col-sm-4 col-xs-12 item">-->

                    <div class="thumbnail item">

                        @if($post->type == 'text')

                        <div>{{ $post->body }}</div>

                        @elseif($post->type == 'photo')

                        <a class="" href="#">
                            <img class="img-responsive pvvoThumbImg" style="background:url('./img/{{$post->body}}') no-repeat center center;">
                        </a>

                        @endif

                        <div class="caption">
                            <div class="media" date="{{ $post->created_at }}">

                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="...">
                                </a>

                                <div class="media-body pvvoMediaBody" >
                                    <h5 class="media-heading"><a href=" {{ URL::to('/posts/detail/' . $post->id)}}"> {{ $post->title }}</a></h5>
                                    <p>
                                        <a href="#" class="favorite" data="{{$post->id}}">
                                            <span class="label label-danger"><span class="fa fa-heart rightSpacingSmall"></span><span class="count">{{ count($post->favorites) }}</span></span>
                                        </a>

                                        <span class="label label-warning">
                                            <span class="fa fa-comment rightSpacingSmall"></span><span class="count">{{ count($post->comments) }}</span>
                                        </span>
                                    </p>
                                </div>

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
                                    <img class="media-object" src="http://placehold.it/200x200" alt="...">
                                </a>


                                <div class="media-body pvvoMediaBody">
                                    <h5 class="media-heading"><a href=" {{ URL::to('/boards/detail/' . $board->id)}}"> {{ $board->title }}</a></h5>
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
</div>

@stop

