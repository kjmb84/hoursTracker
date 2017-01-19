@extends('layout')

@section('content')

    <div class="links">

        @foreach ($users as $user)

            <a href="/list/{{ $user->id }}">{{ $user->name }}</a>

        @endforeach

    <div class="links">