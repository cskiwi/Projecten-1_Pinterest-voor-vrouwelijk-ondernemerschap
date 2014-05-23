@extends('layouts.master')

@section('pagetitle')
User overview
@stop

@section('content')
<div>
    <ul>
        @foreach($users as $user)
        <li><a href="./users/profile/{{$user->id}}">{{ $user->name }}</a></li>
        @endforeach
    </ul>
</div>

<div id="paging">{{ $users->links() }}</div>
@stop