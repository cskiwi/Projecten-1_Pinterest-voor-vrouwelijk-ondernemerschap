<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>@yield('pagetitle') | {{Config::get('app.SiteName') }}</title>

    <meta name="description" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700|Dosis:200,600|Open+Sans:400,700" type="text/css" />
    {{ HTML::style('css/lumen/bootstrap.css') }}
    {{ HTML::style('css/lumen/bootstrap.min.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/default.css') }}

</head>

<body>
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
                {{Config::get('app.version') }}<a class="navbar-brand pvvoTitle" href="{{ URL::to('/') }}">WomanInterest</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="col-md-3 col-sm-5">
                    <ul class="nav navbar-nav">
                        {{ Form::open(array('url' => './boards/search', 'class'=>'navbar-form navbar-left', 'method' => 'get', 'role' => 'search', 'id' => 'search-form')) }}
                            <div class="input-group">
                                {{ Form::text('search-text', $value = null, array('placeholder' => 'Search boards...', 'class'=> 'form-control', 'required' => 'required')) }}
                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                            </div>
                        {{ Form::close() }}
                    </ul>
                </div>
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


@yield('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
{{ HTML::script('js/bootstrap.min.js') }}
@yield('scripts')

</body>
</html>