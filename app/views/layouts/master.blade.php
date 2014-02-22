<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<div id="nav">
    <ul>
        <li><a href="{{ URL::TO('/') }}">home</a></li>
        @if(Auth::check())
        <li><a href="{{ URL::TO('logout') }}">logout</a></li>
        <li><a href="{{ URL::TO('admin') }}">{{ Auth::user()->username  }}</a></li>
        @else
        <li><a href="{{ URL::TO('login') }}">Login</a></li>
        @endif
    </ul>
</div>
@yield('content')
</body>
</html>