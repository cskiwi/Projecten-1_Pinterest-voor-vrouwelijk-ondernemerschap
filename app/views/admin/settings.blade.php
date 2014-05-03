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

        {{ Form::open(array('action' => 'AdminController@postSettings', 'class'=>'form form-horizontal')) }}

        <!-- Form Name -->
        <legend>Settings</legend>

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
            <label class="col-sm-3 control-label">First name</label>
            <div class="col-sm-5">
                {{ Form::text('name', Auth::user()->name, array('class' => 'form-control', 'placeholder' => 'Name' ) ) }}
            </div>
        </div>

        <!-- Button -->
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