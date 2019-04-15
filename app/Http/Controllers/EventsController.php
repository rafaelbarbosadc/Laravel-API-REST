<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    public function index()
    {
        return Events::all();
    }

    public function show(Events $event)
    {
        return $event;
    }

    public function store(Request $request)
    {
        $event = Events::create($request->all());

        return response()->json($event, 201);
    }

    public function update(Request $request, Events $event)
    {
        $event->update($request->all());

        return response()->json($event,200);
    }

    public function delete(Request $request, $id)
    {
        $event->delete();

        return response()->json(null, 204);
    }

    public function getByName(Request $request, $term)
    {
       $event = Events::where('title', 'like', "%$term%")->get();

       return response()->json($event, 201);
    }

    public function getByDate(Request $request)
    {
        if(request('type') == 'year') {
            $events = Events::whereYear('date', '=', request('date'))->get();

            return response()->json($events,200);
        }

        if(request('type') == 'month') {
            $events = Events::whereMonth('date', '=', request('date'))->get();

            return response()->json($events,200);
        }

        if(request('type') == 'day') {
            $events = Events::whereDay('date', '=', request('date'))->get();

            return response()->json($events,200);
        }

        if(request('type') == 'date') {
            $events = Events::whereDate('date', '=', request('date'))->get();

            return response()->json($events,200);
        }


    }

}
