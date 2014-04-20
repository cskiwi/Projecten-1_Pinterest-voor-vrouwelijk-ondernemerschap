@extends('layouts.master')

@section('pagetitle')
	{{ $user->name }} on WomanInterest
@stop

@section('content')

<div class="container">

	<div class="panel">

		<div class="panel-body">
		
			<div class="row">
		
				<div class="pull-left profBoxInfo">
					<p><img src="http://placehold.it/150x150" /></p>
				</div>
				
				<div class="pull-left profBoxInfo">
					<h3>{{ $user->name }} - {{ $user->username }}</h3>
					
					<p>
						<span class="fa fa-facebook leftSpacingSmall"></span>
						<span class="fa fa-twitter leftSpacingSmall"></span>
						<span class="fa fa-flickr leftSpacingSmall"></span>
						<span class="fa fa-linkedin leftSpacingSmall"></span>
					</p>
				</div>
			
			</div>

		</div>
		

	</div>
	
	<div class="row profBoxJumbo">
			<ul class="stats">
				<li class="profileTabActive">
					<h4 class="statLbl">Pins</h4>
					214
				</li>
				<li>
					<h4 class="statLbl">Boards</h4>
					15
				</li>
				<li>
					<h4 class="statLbl">Followers</h4>
					21k
				</li>
				<li>
					<h4 class="statLbl">Favourites</h4>
					852
				</li>
			</ul>
		</div>
	
</div>
<div class="well">
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>{{ $user->username }}'s boards</h4></div>
		<div class="panel-body">

			<div class="col-xs-6 col-md-12">
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
				<a href="#" class="thumbnail boardThumb pull-left">
					<p>Kittens</p>
					<img src="http://placehold.it/150x150" >
				</a>
			</div>

		</div>
	</div>
</div>



<div class="container">


<h2>Has made the following boards</h2>
<ul>
@foreach($user->boards as $user_board)
    <li><a href="{{ URL::TO('/boards/detail/'.$user_board->id) }}">{{ $user_board->title }}</a> ( {{ count($user_board->posts) }} posts) </li>
@endforeach
</ul>

<h2>Has made the following posts</h2>
<ul>
    @foreach($user->posts as $user_post)
    <li><a href="{{ URL::TO('/posts/detail/'.$user_post->id) }}">{{ $user_post->title }}</a> ( in {{ count($user_post->boards) }} boards) </li>
    @endforeach
</ul>

<h2>Follows following boards</h2>
<ul>
    @foreach($user->follows as $board)
    <li><a href="{{ URL::TO('/boards/detail/'.$board->id) }}">{{ $board->title }}</a> ( has {{ count($board->posts) }} posts) </li>
    @endforeach
</ul>

</div>
</div>
@stop