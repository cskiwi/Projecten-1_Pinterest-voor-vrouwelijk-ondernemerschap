@extends('layouts.master')

@section('pagetitle')
Post overview
@stop

@section('content')
<div class="container">
    <ul>
        @foreach($pins as $pin)
        <li>
            <a href="{{ URL::TO('/pins/detail/'.$pin->id) }}">{{ $pin->title }}</a>
            by <a href="{{ URL::TO('/users/profile/'.$pin->user->id) }}">{{ strlen( $pin->user->name) != 0 ? $pin->user->name : $pin->user->username }} </a>
        </li>
        @endforeach
    </ul>

    <div id="paging">{{ $pins->links() }}</div>

</div>

@stop