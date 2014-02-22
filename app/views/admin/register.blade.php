@extends('layouts.master')

@section('pagetitle')
register
@stop

@section('content')
{{ Form::open(array('redirect' => 'admin/register')) }}

<h1>Register</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('name') }}
    {{ $errors->first('username') }}
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
    {{ $errors->first('password_confirmation') }}
</p>

<p>{{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}</p>

<p>{{ Form::label('username', 'Username') }}
    {{ Form::text('username') }}</p>

<p>{{ Form::label('email', 'Email') }}
    {{ Form::text('email') }}</p>

<p>{{ Form::label('password', 'Password') }}
    {{ Form::text('password') }}</p>

<p>{{ Form::label('password_confirmation', 'Password confirm') }}
    {{ Form::text('password_confirmation') }}</p>

<p>{{ Form::submit('Submit') }}</p>

{{ Form::close() }}
@stop