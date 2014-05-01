@extends('layouts.master')

@section('pagetitle')
Your settings - {{ Auth::user()->username  }}
@stop
@section('scripts')
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
@stop
@section('content')
<div class="well">
<div class="container">

		<form class="form-horizontal">

			<!-- Form Name -->
			<legend>Settings</legend>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-sm-3 control-label">Username</label>
				<div class="col-sm-5">
					<input id="username" name="username" type="text" placeholder="{{ Auth::user()->username  }}" class="form-control" required="" disabled>
				</div>
			</div>

			<!-- Password input-->
			<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-5">
					<input id="password" name="password" type="password" placeholder="" class="form-control" required="">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-9">
					<input id="email" name="email" type="text" placeholder="" class="form-control" required="">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-sm-3 control-label">First name</label>
				<div class="col-sm-5">
					<input id="firstname" name="firstname" type="text" placeholder="" class="form-control">
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
				<label class="col-sm-3 control-label">Last name</label>
				<div class="col-sm-5">
					<input id="lastname" name="lastname" type="text" placeholder="" class="form-control">
				</div>
			</div>


			<!-- Button -->
			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-9">
					<button id="submit" name="submit" class="btn btn-info">Save settings</button>
				</div>
			</div>

		</form>

</div>
</div>

@stop