@extends('layouts.master')

@section('pagetitle')
	Welcome {{ Auth::user()->username  }}
@stop

@section('content')
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
		  <a class="navbar-brand pvvoTitle" href="#">WomanInterest</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">

		  </ul>
		
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown active">
				<a href="#" class="dropdown-toggle upperCase" data-toggle="dropdown">{{ Auth::user()->username  }} <span class="fa fa-bars leftSpacingSmall"></span></a>
				<ul class="dropdown-menu text-right">
					<li><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Profile <span class="fa fa-user leftSpacingSmall"> </span></a></li>
					<li><a href="">Logout <span class="fa fa-shield leftSpacingSmall"> </span></a></li>
				</ul>
			</li>
			<li><a href="{{ URL::to('posts') }}">POSTS <span class="fa fa-comments leftSpacingSmall"></span></a></li>
			<li><a href="{{ URL::to('boards') }}">BOARDS <span class="fa fa-cloud leftSpacingSmall"> </span> </a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
</div>
@stop