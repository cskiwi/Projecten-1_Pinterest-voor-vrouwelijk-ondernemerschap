<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    {{ HTML::style('css/common.css'); }}
    {{ HTML::script('js/testscript.js'); }}
    <title>@yield('pagetitle')</title>

    <meta name="description" content="">
    <meta name="robots" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	

    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700|Dosis:200,600|Open+Sans:400,700" type="text/css" />
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
	{{ HTML::style('css/default.css') }}
	
</head>

<body>

<div id="nav">
    <ul>
        <li><a href="{{ URL::TO('/') }}">home</a></li>
        @if(Auth::check())
        <li><a href="{{ URL::TO('admin/logout') }}">logout</a></li>
        <li><a href="{{ URL::TO('admin/profile') }}">{{ Auth::user()->name  }} ({{ Auth::user()->username  }})</a></li>
        @else
        @if(!(Request::is('admin/login') || Request::is('admin/register')))
            <li><a href="{{ URL::TO('admin/login') }}">Login</a> or <a href="{{ URL::TO('admin/register') }}">register</a></li>
        @endif
        @endif
    </ul>
</div>

@yield('content')

	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>