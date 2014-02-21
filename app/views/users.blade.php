@extends('master')

@section('pagetitle')
users
@stop

@section('content')
<div>
@foreach($users as $user)
<p>{{ $user->name }}</p>
@endforeach
</div>

<div class="paging">Paging: {{ $users->links() }}</div>
@stop