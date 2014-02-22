@extends('layouts.master')

@section('pagetitle')
users
@stop

@section('content')
<div>
@foreach($users as $user)
<p>{{ $user->name }}</p>
@endforeach
</div>

<div id="paging">{{ $users->links() }}</div>
@stop