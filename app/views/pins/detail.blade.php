@extends('layouts.master')

@section('scripts')
{{ HTML::script('js/detail.js') }}

@stop

@section('pagetitle')
Post detail | {{ $pin->title }}
@stop

@section('content')
<div class="well clearfix">

    <div class="container">

        <div class="row">


            <div class="col-md-8">

                <div class="panel panel-default">

                    <div class="panel-heading">{{ $pin->base()->title }}</div>

                    @if($pin->base()->type == 'Image')
                    <div class="panel-body pinDetailBodyImg">
                        <img class="img-responsive pvvoThumbImg" src="{{ URL::asset('/img/' . $pin->base()->imgLocation) }}" >

                    </div>
                    @if($pin->base()->description != '')
                    <div class="panel-body">
                        <h4>Description</h4>
                        {{ $pin->base()->description }}
                    </div>
                    @endif
                    @endif

                    @if($pin->base()->type == 'Text')
                    <div class="panel-body">
                        {{ $pin->base()->description }}
                    </div>
                    @endif

                    @if($pin->base()->type == 'Offer')
                    <div class="panel-body pinDetailBodyImg">
                        <img class="img-responsive pvvoThumbImg" src="{{ URL::asset('/img/' . $pin->base()->imgLocation) }}" >

                    </div>
                    @if($pin->base()->description != '')
                    <div class="panel-body">
                        <h3>Description</h3>
                        {{ $pin->base()->description }}

                        <h3>Buy this item!</h3>
                        <h4>Price <span class="label label-info">€ {{ $pin->base()->price }}</span></h4>
                        <p>
                            <button type="button" class="btn btn-danger">Get it now in our store!</button>

                        </p>
                    </div>
                    @endif
                    @endif

                    @if($pin->base()->type == 'Video')
                    <iframe class="pvvoStreamVideo" width="100%" height="500px" src="{{ $pin->base()->description }}" frameborder="0" allowfullscreen></iframe>
                    @endif

                </div>

            </div>

            <div class="col-md-4">

                <div class="panel">
                    <div class="panel-body">
                        <p>
                            Pin by <a href="{{ URL::TO('/users/profile/'.$pin->originalUser()->id) }}">{{ $pin->originalUser()->viewName() }} </a> <br />
                            @if ($pin->repinned())
                            Repin by <a href="{{ URL::TO('/users/profile/'.$pin->user->id) }}">{{ $pin->user->viewName() }} </a> <br />
                            @endif
                            Pinned in <a href="{{ URL::TO('/boards/detail/'.$pin->board->id) }}">{{ $pin->board->title }}</a>

                        </p>

                        <h4 class="statLbl">Favourites</h4>
                        <p>
                            <span id="fav-count"> {{count($pin->favorites)}}</span>
                        </p>

                        <p>
                            <button type="button" id="favorited"  class="btn btn-info favorite" data="{{$pin->id}}" @if(!$pin->FavoriteUser()) style="display: none;" @endif><span class="fa fa-star rightSpacingSmall"></span> Favourited</button>
                            <button type="button" id="not-favorited" class="btn btn-default favorite" data="{{$pin->id}}" @if($pin->FavoriteUser()) style="display: none;" @endif><span class="fa fa-star rightSpacingSmall"></span> Favourite</button>
                            @if($pin->base()->type == 'Offer')
                            <a class="btn buy">
                                <button type="button" class="btn btn-default"><span class="fa fa-euro rightSpacingSmall"></span> {{ $pin->base()->price }} -  BUY </button>
                            </a>
                            @else
                            <a class="btn repin" data="{{$pin->id}}">
                                <button type="button" class="btn btn-default"><span class="fa fa-retweet rightSpacingSmall"></span> pin</button>
                            </a>
                            @endif


                            @if(Auth::check())
                            @if(Auth::user() == $pin->user)
                            <a href="{{ URL::TO('/pins/delete/'.$pin->id) }}" type="button" class="btn btn-danger"><span class="fa fa-times rightSpacingSmall"></span> remove pin</a>
                            @endif
                            @endif
                        </p>
                    </div>
                </div>



                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Member of the following boards
                    </div>

                    <div class="list-group">
                        <a href="{{ URL::TO('/boards/detail/'.$pin->base()->board->id) }}" class="list-group-item">{{ $pin->base()->board->title }}</a>
                        @foreach($pin->base()->repins as $repin)
                        <a href="{{ URL::TO('/boards/detail/'.$repin->board->id) }}" class="list-group-item">{{ $repin->board->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

<div class="container">

    <div class="row">

        <div class="col-md-8">
            @if(Auth::check())
            <h3>Comments</h3>

            <p><em>Add a comment as {{ Auth::user()->viewName() }}</em></p>


            {{ Form::open(array('action' => array('CommentController@addComment', $pin->id), 'role' => 'form', 'id' => 'addComment',  'method' => 'post')) }}
            @if ( $errors->count() > 0 )
            <div id="validation-errors" class="alert alert-danger">
                <p>Some errors occured</p>
                <ul>
                    @foreach( $errors->all() as $message )
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                {{ Form::textarea('content', null, array('class' => 'form-control wysi', 'rows' => '3')) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Add comment', array('class' => 'btn btn-info')) }}
            </div>
            {{ Form::close() }}

            @endif
            @foreach($pin->comments as $comment)
            <div class="well well-sm">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/75x75" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{$comment->user->viewName()}}</h4>
                        <p>{{$comment->content}}</p>

                        @if ($pin->user == Auth::user() || $comment->user == Auth::user())

                        {{ Form::open(array('action' => array('CommentController@deleteComment', $comment->id, $pin->id), 'role' => 'form', 'id' => 'addComment',  'method' => 'post')) }}
                        <div class="form-group">
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        </div>
                        {{ Form::close() }}
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>





</div>

@stop