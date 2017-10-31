@extends('layouts.app')
@section('content')

    <h1> All Attendees</h1>

    @foreach ($attendees as $attendee)
        <div>
            {{ $attendee->lastname}}
        </div>
    @endforeach


@stop