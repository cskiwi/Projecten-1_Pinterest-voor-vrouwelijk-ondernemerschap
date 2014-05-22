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

        {{ Form::open(array('action' => 'AdminController@postSettings', 'class'=>'form form-horizontal','files' => true)) }}

        <!-- Form Name -->
        <legend>Settings</legend>

        @if ( $errors->count() > 0 )
        <div id="validation-errors" class="alert alert-danger">
            <p>Some errors occured</p>
            <ul>
                @foreach( $errors->all() as $message )
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Text input-->
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-5">
                {{ Form::text('username', Auth::user()->username, array('class' => 'form-control', 'disabled' => 'disabled' ) ) }}
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-5">
                {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'id'=>'password')) }}
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                {{ Form::email('email', Auth::user()->email ,array('placeholder' => 'email', 'class' => 'form-control', 'id'=>'email', 'required' => 'required')) }}
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-sm-3 control-label">Full name</label>
            <div class="col-sm-5">
                {{ Form::text('name', Auth::user()->name, array('class' => 'form-control', 'placeholder' => 'Name' ) ) }}
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Profile picture</label>
            <div class="col-sm-5">
                {{ Form::file('avatar-file',array('class' => 'form-control') ) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <h4>Options</h4>
                <div class="checkbox">
                    <label>
                        {{ Form::checkbox('receiveMails', null, Auth::user()->receiveMails) }} Receive mails
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        {{ Form::checkbox('showFullName', null, Auth::user()->showFullName) }} If checked, shows your full name instead of username
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <button id="submit" name="submit" class="btn btn-info">Save settings</button>
            </div>
        </div>
        {{ Form::close() }}


    </div>
</div>

@stop