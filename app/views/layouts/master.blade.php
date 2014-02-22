<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    {{ HTML::style('css/common.css'); }}
    {{ HTML::script('js/testscript.js'); }}
</head>

<body>
<div id="nav">
    <ul>
        <li><a href="{{ URL::TO('/') }}">home</a></li>
        @if(Auth::check())
        <li><a href="{{ URL::TO('admin/logout') }}">logout</a></li>
        <li><a href="{{ URL::TO('admin/profile') }}">{{ Auth::user()->username  }}</a></li>
        @else
        <li><a href="{{ URL::TO('admin/login') }}">Login</a></li>
        @endif
    </ul>
</div>
@yield('content')
</body>
</html>