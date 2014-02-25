@extends('layouts.master')

@section('pagetitle')
Welcome {{ Auth::user()->username  }}
@stop
@section('scripts')
{{ HTML::script('js/stream.js') }}
@stop
@section('content')
<div class="container">

    <nav class="navbar navbar-default navbar-static-top pvvoNavbar topOffset" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand pvvoTitle" href="#">WomanInterest</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle upperCase" data-toggle="dropdown">{{ Auth::user()->username  }} <span class="fa fa-bars leftSpacingSmall"></span></a>
                        <ul class="dropdown-menu text-right">
                            <li><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Profile <span class="fa fa-user leftSpacingSmall"> </span></a></li>
                            <li><a href="">Settings <span class="fa fa-wrench leftSpacingSmall"> </span></a></li>
                            <li><a href="{{ URL::to('admin/logout') }}">Logout <span class="fa fa-shield leftSpacingSmall"> </span></a></li>
                        </ul>
                    </li>
                    <!--<li><a href="{{ URL::to('posts') }}">POSTS <span class="fa fa-comments leftSpacingSmall"></span></a></li>
                    <li><a href="{{ URL::to('boards') }}">BOARDS <span class="fa fa-cloud leftSpacingSmall"> </span> </a></li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</div>

<div class="well">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    @foreach ($boards as $board)
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

            <!--<div class="col-md-4">
                <div class="panel panel-default ">
                    <div class="panel-heading">Boards you are following</div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div>
            </div>-->

            <div class="col-md-12">

                <div class="row ">
                    @foreach($posts as $post)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb post" filter-data="{{$post->from_board}}">
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
                                <img class="img-responsive pvvoThumbImg" src="" style="background:url('http://localhost/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/img/0{{ $i }}.jpg') no-repeat center center;">
                            </a>
                            <div class="caption">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="...">
                                    </a>
                                    <div class="media-body pvvoMediaBody">
                                        <h5 class="media-heading">Jesse Struyvelt</h5>
                                        <p>Lorem ipsum dolor sit amet. Paljon on koskessa kivia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>


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
                    @endforeach

                </div>

            </div>

        </div>

    </div>
</div>
@stop