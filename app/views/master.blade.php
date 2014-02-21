<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('pagetitle')</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        #paging ul, #nav ul, #admin ul{
            padding: 0;
            margin: 0;
            display: inline;
            list-style-type:none;
        }

        #paging li, #nav li {
            padding: 1px;
            display: inline;
        }
        #nav li:before { content: "«" }
        #nav li:after { content: "»" }

        a, a:visited {
            text-decoration:none;
            color: #000000;
        }

        h1 {
            font-size: 32px;
            margin: 16px 0 0 0;
        }
    </style>
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
