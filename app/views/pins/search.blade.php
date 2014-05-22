@extends('layouts.master')

@section('pagetitle')
Board overview
@stop

@section('content')
<div>
    <ul>
        @foreach($pins as $pin)
        <li><a href="./detail/{{$pin->id}}">{{ $pin->title }}</a> by <a href="{{ URL::TO('/users/profile/'.$pin->user->id) }}"> {{$pin->user->name}}</a> </li>
        @endforeach
    </ul>
</div>

@stop