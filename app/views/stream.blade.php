@extends('layouts.master')

@section('pagetitle')
Welcome {{ Auth::user()->username  }}
@stop
@section('scripts')
{{ HTML::script('js/stream.js') }}
{{ HTML::script('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js') }}
@stop
@section('content')

<div class="well">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="" id="filter_boards">
                        <a href="#" filter-data="all">
                            <span class="badge pull-right">2 new</span>
                            All
                        </a>
                    </li>
                    @foreach (Auth::user()->follows as $board)
                    <li class="" id="filter_boards">
                        <a href="#" filter-data="{{$board->id}}">
                            <span class="badge pull-right">2 new</span>
                            {{$board->title }}
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="row topOffset">

            <div class="col-md-12">

                <div class="row">
                    @foreach($posts as $post)
					<!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb post" filter-data="<?php foreach($post->boards as $fboard) echo $fboard->id . ' '; ?>"> -->
                    <div class="col-lg-3 col-md-4 col-xs-6 item" filter-data="<?php foreach($post->boards as $fboard) echo $fboard->id . ' '; ?>">
                        @if($post->type == 'text')
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="media">

                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="...">
                                    </a>
                                    <div class="media-body pvvoMediaBody">

                                        <h5 class="media-heading"><a href=" {{ URL::to('/posts/detail/' . $post->id)}}"> {{ $post->title }}</a></h5>
                                        {{ $post->content }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($post->type == 'foto')
                        <div class="thumbnail">
                            <a class="" href="#">
                                <img class="img-responsive pvvoThumbImg" src="{{ $post->body }}" style="background:url('./{{$post->body}}') no-repeat center center;">
                            </a>
                            <div class="caption">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="...">
                                    </a>
                                    <div class="media-body pvvoMediaBody">
                                        <h5 class="media-heading">Jesse Struyvelt</h5>
                                        <p>Lorem ipsum dolor sit amet. Paljon on koskessa kivia.</p>
                                        {{$post->body}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>



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

