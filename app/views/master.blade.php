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

        #paging ul, #nav ul {
            padding: 0;
            margin: 0;
            display: inline;
            list-style-type:none;
        }

        #paging li, #nav ul {
            padding: 1px;
            display: inline;
        }
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
        @if(Auth::check())
        <li>welcome {{ Auth::user()->username  }}</li>
        <li><a href="{{ URL::TO('logout') }}">logout</a></li>
        @else
        <li><a href="{{ URL::TO('login') }}">Login</a></li>
        @endif
    </ul>
</div>

@yield('content')
</body>
</html>
