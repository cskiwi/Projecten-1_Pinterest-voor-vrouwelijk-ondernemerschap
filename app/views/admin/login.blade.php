@extends('layouts.masterHome')

@section('pagetitle')
{{Config::get('app.SiteName') }}
@stop

@section('scripts')
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
                    {{Config::get('app.version') }}<a class="navbar-brand pvvoTitle" href="{{ URL::to('/') }}">WomanInterest</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL::to('/') }}">BACK <span class="fa fa-retweet leftSpacingSmall"></span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 topOffset">
                <h3>Login</h3>

                {{ Form::open(array('url' => '#', 'class'=>'form', 'role' => 'form', 'id' => 'login-form')) }}


                <div id="validation-errors" class="alert alert-danger" hidden>
                    <p>Some errors occured</p>
                    <ul></ul>
                </div>

                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        {{ Form::text('username', $value = null, array('placeholder' => 'Username', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><span class="fa fa-asterisk"></span></span>
                        {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'id'=>'password', 'required' => 'required')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        {{ Form::submit('Login', array('class' => 'btn btn-danger btn-default')) }}
                    </div>
                </div>

                {{ Form::close() }}
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 topOffset">
                <h3>Register for free</h3>

                {{ Form::open(array('url' => 'admin/register', 'class'=>'form', 'role' => 'form', 'id' => 'register-form')) }}

                <div id="validation-errors" class="alert alert-danger" hidden>
                    <p>Some errors occured</p>
                    <ul></ul>
                </div>

                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        {{ Form::text('username', $value = null, array('placeholder' => 'Username', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><span class="fa fa-asterisk"></span></span>
                        {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'id'=>'password', 'required' => 'required')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                        {{ Form::text('email', $value = null, array('placeholder' => 'Email', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 input-group">
                        {{ Form::submit('Sign up', array('class' => 'btn btn-danger btn-default')) }}
                    </div>
                </div>
                {{ Form::close() }}

            </div>

        </div>

        <div class="row pvvoFooter">
            <p class="">WomanInterest is a project for KaHo Sint&dash;Lieven University &dash; Developed by highly intellectual monkeys.</p>
        </div>


    </div>

</div>

@stop