<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>@yield('pagetitle')</title>

    <meta name="description" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700|Dosis:200,600|Open+Sans:400,700" type="text/css" />
    {{ HTML::style('css/lumen/bootstrap.min.css') }}
    {{ HTML::style('css/lumen/bootstrap-theme.min.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/default.css') }}

</head>

<body>
@yield('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
{{ HTML::script('js/bootstrap.min.js') }}
@yield('scripts')

</body>
</html>