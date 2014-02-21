@extends('master')

@section('pagetitle')
hello
@stop

@section('content')
<p>Welcome!</p>
<p>Check out the <a href="<?php echo(URL::to('users')); ?>">Dummy users</a></p>

@stop