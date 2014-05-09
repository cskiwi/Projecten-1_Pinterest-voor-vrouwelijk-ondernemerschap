@extends('layouts.master')

@section('pagetitle')
{{ $user->name }} on WomanInterest
@stop

@section('content')

<div class="container">

    <div class="panel">

        <div class="panel-body">

            <div class="row">

                <div class="pull-left profBoxInfo">
                    <p><img src="http://placehold.it/150x150" /></p>
                </div>

                <div class="pull-left profBoxInfo">
                    <h3>{{ $user->name }} - {{ $user->username }}</h3>

                    <p>
                        <span class="fa fa-facebook leftSpacingSmall"></span>
                        <span class="fa fa-twitter leftSpacingSmall"></span>
                        <span class="fa fa-flickr leftSpacingSmall"></span>
                        <span class="fa fa-linkedin leftSpacingSmall"></span>
                    </p>
                </div>

            </div>

        </div>


    </div>

    <div class="row profBoxJumbo">
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

                            <a href="#" class="thumbnail boardThumb pull-left">
                                <p>{{ $board->title }} </p>

                                @if(($image = $board->MostLiked('Image')) != null)
                                {{ HTML::image(asset('img/' . $image->imgLocation), $board->title , array('class' => '')) }}
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

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Latest pins of {{ $user->username }}</h4></div>
                    <div class="panel-body">
                        <div class="col-xs-6 col-md-12">

                            @foreach($user->pins as $user_pin)

                            @endforeach
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
@stop