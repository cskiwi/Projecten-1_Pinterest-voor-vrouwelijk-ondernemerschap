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
        div {
            width: 500px;
        }
        .paging ul {
            padding: 0;
            margin: 0;
            display: inline;
            list-style-type:none;
        }

        .paging li {
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
@yield('content')
</body>
</html>
