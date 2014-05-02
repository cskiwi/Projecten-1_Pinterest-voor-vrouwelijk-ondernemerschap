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
                {{ count($user->posts) }}
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
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Boars of {{ $user->username }}</h4></div>
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
                    <a href="#" class="thumbnail boardThumb pull-left">
                        <p>This user created no boards</p>
                    </a>
                    @endif
                </div>

            </div>
        </div>
    </div>



    <div class="container">

        <h2>Has made the following posts</h2>
        <ul>
            @foreach($user->posts as $user_post)
            <li><a href="{{ URL::TO('/posts/detail/'.$user_post->id) }}">{{ $user_post->title }}</a> ( in {{ count($user_post->boards) }} boards) </li>
            @endforeach
        </ul>

        <h2>Follows following boards</h2>
        <ul>
            @foreach($user->follows as $board)
            <li><a href="{{ URL::TO('/boards/detail/'.$board->id) }}">{{ $board->title }}</a> ( has {{ count($board->posts) }} posts) </li>
            @endforeach
        </ul>

    </div>
</div>
@stop