@extends('layouts.app')
@section('content')
    <h1> All Events</h1>

    @foreach ($events as $event)
        <div>
            {{ $event->name }}
        </div>
    @endforeach

@endsection