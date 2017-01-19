@extends('layout')

@section('additionalLinks')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js" />
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.print.css" />

@stop

@section('content')

    <div>Name: {{ $user->name }} </div>

    @foreach ($user->hours as $hour)
        @if ($loop->index % 2 == 0)
            <br>
        @endif
        <div style="width: 20em">
            <div style="float: left">{{ $hour->startTime }}</div>
            <div style="float: right">{{ $hour->endTime }}</div>
        </div>
        <br>

    @endforeach

@stop