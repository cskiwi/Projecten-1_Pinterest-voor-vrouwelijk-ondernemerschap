@extends('layouts.master')

@section('pagetitle')
{{ $user->name }} on WomanInterest
@stop

@section('scripts')
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
{{ HTML::script('js/jquery.touch-punch.min.js') }}
{{ HTML::script('js/jquery.shapeshift.min.js') }}
{{ HTML::script('js/followBoard.js') }}
{{ HTML::script('js/stream.js') }}
@stop

@section('content')

<div class="container">

    <div class="panel">

        <div class="panel-body">

            <div class="row">

                <div class="col-md-6">

                    <div class="pull-left profBoxInfo">
                        <p><img src="@if ($user->avatar) {{ asset('avatar/' .  $user->avatar) }} @else http://placehold.it/150x150 @endif" width="150" height="150" /></p>
                    </div>

                    <div class="pull-left profBoxInfo">
                        <h3>{{ $user->name }} - {{ $user->username }}</h3>

                        <p>
                            @if($user->facebook)<a href="http://facebook.com/{{ $user->facebook }}"><span class="fa fa-facebook leftSpacingSmall"></span></a>@endif
                            @if($user->twitter)<a href="http://twitter.com/{{ $user->twitter }}"><span class="fa fa-twitter leftSpacingSmall"></span></a>@endif
                            @if($user->instagram)<a href="http://instagram.com/{{ $user->instagram }}"><span class="fa fa-instagram leftSpacingSmall"></span></a>@endif
                        </p>
                    </div>

                </div>

                <div class="col-md-6 col-sm-3">
                    <div class="profBoxJumbo">
                        <ul class="stats">
                            <li class="">
                                <h4 class="statLbl">Pins</h4>
                                {{ count($user->pins) }}
                            </li>
                            <li>
                                <h4 class="statLbl">Boards</h4>
                                {{ count($user->boards) }}
                            </li>
                            <li>
                                <h4 class="statLbl">Following</h4>
                                {{ count($user->follows) }}
                            </li>
                            <li>
                                <h4 class="statLbl">Favourites</h4>
                                {{ count($user->favorites) }}
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="well">
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Boards of {{ $user->username }}</h4></div>
                    <div class="panel-body">
                        <div class="col-xs-6 col-md-12">
                            @if(count ($user->boards) > 0)
                            @foreach($user->boards as $board)

                            <a href="{{ URL::TO('/boards/detail/'.$board->id) }}" class="thumbnail boardThumb pull-left">
                                <p>{{ $board->title }} </p>

                                @if(($image = $board->MostLiked('Image')) != null)
                                {{ HTML::image(asset('img/' . $image->imgLocation), $board->title , array('class' => '', 'width' => '150', 'height' => '150')) }}
                                @else
                                <img src="http://placehold.it/150x150" >
                                @endif
                            </a>
                            @endforeach
                            @else
                                <p>This user didn't create any boards yet.</p>
                            @endif
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        {{ $user->username }} follows these boards
                    </div>

                    <div class="list-group">
                        @if(count ($user->follows) > 0)
                            @foreach($user->follows as $board)
                            <a href="{{ URL::TO('/boards/detail/'.$board->id) }}" class="list-group-item">{{ $board->title }} <span class="badge pull-right">{{ count($board->pins) }}</span></a>
                            @endforeach
                        @else
                            <li class="list-group-item">{{ $user->username }} is not following any board.</li>
                        @endif
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@if (count($user->pins) != 0)
<div class="well">

    <h2>Pins from user</h2>

    <div class="row topOffset">
        <div class="col-md-12">
            <div class="row photos" id="">

                @foreach($user->pins as $pin)
                    @include('partial.pinboard')
                @endforeach

            </div>
        </div>
    </div>
</div>
@endif
@stop