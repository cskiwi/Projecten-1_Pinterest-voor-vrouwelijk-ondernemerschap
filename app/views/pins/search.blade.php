@extends('layouts.master')

@section('pagetitle')
Board overview
@stop

@section('scripts')
{{ HTML::script('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js') }}
{{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
{{ HTML::script('js/jquery.touch-punch.min.js') }}
{{ HTML::script('js/jquery.shapeshift.min.js') }}
{{ HTML::script('js/followBoard.js') }}
{{ HTML::script('js/stream.js') }}
@stop

@section('content')


<div class="well">
    <h1>Search results</h1>
    <div class="row topOffset">
        <div class="col-md-12">
            <div class="row photos" id="">

                @foreach($pins as $pin)
                @include('partial.pinboard')
                @endforeach

            </div>
        </div>
    </div>
</div>

@stop