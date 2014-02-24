@extends('layouts.master')

<!--<div id="nav">
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

-->

@section('pagetitle')
	Project PVVO
@stop


@section('content')
<div class="jumbotron pvvoJumbo">

	<div class="container">
	
	<nav class="navbar navbar-default pvvoNavbar" role="navigation">
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
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">USERS <span class="fa fa-bars leftSpacingSmall"></span></a>
				<ul class="dropdown-menu pvvoDropdown text-right">
					<li class="divider"></li>
					<li><a href="{{ URL::TO('admin/login') }}">Login <span class="fa fa-key leftSpacingSmall"> </span></a></li>
					<li><a href="{{ URL::TO('admin/register') }}">Register <span class="fa fa-pencil leftSpacingSmall"> </span></a></li>
					<li><a href="{{ URL::to('users') }}">Privacy <span class="fa fa-shield leftSpacingSmall"> </span></a></li>
				</ul>
			</li>
			<li><a href="{{ URL::to('posts') }}">POSTS <span class="fa fa-comments leftSpacingSmall"></span></a></li>
			<li><a href="{{ URL::to('boards') }}">BOARDS <span class="fa fa-cloud leftSpacingSmall"> </span> </a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
		<div class="row">
		
			<div class="col-md-7 topOffset text-center">
		
				<h2>Hello, ladies.. <br />Get ready for some interesting times.</h2>
				<p>Work hard. Pin hard.</p>
				
				<button type="button" class="btn btn-warning">Learn more</button>
				<button type="button" class="btn btn-warning">Get started</button>
			</div>
			
			<div class="col-md-5 topOffset">
				
				<h3>Register for free</h3>
				
				<form class="form" role="form">
					
					<div class="form-group">
						<div class="col-sm-8 input-group">
						
							<span class="input-group-addon"><span class="fa fa-user"></span></span>
							<input type="text" class="form-control" id="username" placeholder="Username">
							
						</div>
					</div>
					
				  <div class="form-group">
					<div class="col-sm-8 input-group">
						<span class="input-group-addon"><span class="fa fa-asterisk"></span></span>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-8 input-group">
						<span class="input-group-addon"><span class="fa fa-envelope"></span></span>
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-8 input-group">
					  <button type="submit" class="btn btn-danger btn-default">Sign Up</button>
					</div>
				  </div>
				</form>
			
			</div>
		
		</div>
		
		<div class="row pvvoFooter">
			<p class="">WomanInterest is a project for KaHo Sint&dash;Lieven University &dash; Developed by monkeys.</p>
		</div>

	</div>
</div>

<!--


<p>Welcome!</p>
<p>Check out the <a href="{{ URL::to('users') }}">Dummy users</a></p>
<p>Check out the <a href="{{ URL::to('posts') }}">Dummy posts</a></p>
<p>Check out the <a href="{{ URL::to('boards') }}">Dummy boards</a></p>


@if(Auth::check())

{{ Form::open(array('url' => 'posts/add')) }}

    <h1>Add post</h1>
    <p> {{$errors->first('title')}}
        {{$errors->first('body')}}</p>

    <p> {{Form::label('title', 'Title')}}
        {{Form::text('title')}}</p>

    <p>{{Form::label('board', 'Board')}}
    <select id="board">
        @foreach(Auth::user()->boards as $user_board)
        <option value="{{$user_board->id}}">{{ $user_board->title }}</option>
        @endforeach
    </select> <a href="{{ URL::to('boards/create') }}">Create board</a> </p>
    <p>{{Form::textarea('body')}}</p>

    <p>{{Form::submit('Submit')}}</p>
{{ Form::close() }}
@endif

-->
@stop