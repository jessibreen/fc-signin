<?php
namespace App\Http\Controllers;
use DB;
use App\Event;
use Illuminate\Http\Request;
class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events') );
    }
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
    public function store(Request $request)
    {
        $events = new Event;
        $events->name = $request->name;
        $events->date = $request->date;
        $events->time = $request->time;
        save($events);
    }
}