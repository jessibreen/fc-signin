@extends('layouts.app')
@section('content')

    <h1 class="text-center"> Food Connection Event Sign-In</h1>

    <hr>

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

   {{-- @foreach ($events as $event)
    <div>
        <a href="/events/{{$event->id}}">{{ $event->name}}</a>
    </div>
    @endforeach--}}

        <ul class="list-group">
            @foreach ($events as $event)
                <li class="list-group-item"><a href="/events/{{$event->id}}">{{ $event->name}}</a></li>
            @endforeach
        </ul>


        </div>

    </div>

@stop