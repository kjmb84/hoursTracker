@extends('layout')

@section('additionalLinks')

{{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>--}}
{{--<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.print.css" />--}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.css" />
<script src='http://fullcalendar.io/js/fullcalendar-3.1.0/lib/moment.min.js'></script>
<script src='http://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery.min.js'></script>
{{--<script src="http://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery-ui.custom.min.js"></script>--}}
<script src='http://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.js'></script>


<script type="text/javascript" src="{{ '/js/calendar.js' }}"></script>

@stop

@section('content')

    <div>Name: {{ $user->name }} </div>

    @foreach ($user->hours as $hour)
        <div style="width: 60%; margin: auto;">
            <div style="float: left">{{ $hour->startTime }}</div>
            <div style="float: right">{{ $hour->endTime }}</div>
        </div>

        <div id="calendar"></div>

        <br>

    @endforeach

@stop