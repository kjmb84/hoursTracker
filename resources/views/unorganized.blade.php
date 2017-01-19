@extends('layout')

@section('content')

    <div>Everything all at once</div>

    @foreach ($users as $user)

        <div>{{ $user->name }}</div>
        <br>
        @foreach ($user->hours as $time)
            <div>Start time: {{ $time->startTime }}</div>
            <br>
            <div>End time: {{ $time->endTime }}</div>
        @endforeach
        <br>
    @endforeach

@stop