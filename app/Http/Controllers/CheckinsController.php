<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkins;
use App\Events;
use App\User;


class CheckinsController extends Controller
{
    public function submit(Request $request) {
        $event = Events::find(request('event_id'));
        $user = User::find(request('user_id'));

        if(!$event) {
            return response()->json(['error'=> 'Event not found']);
        }
        if(!$user) {
            return response()->json(['error'=> 'User not found']);
        }
        $checkins = Checkins::create([
            'status' => 0,
            'user_id' => request('user_id'),
            'event_id' => request('event_id'),
        ]);

        return response()->json($event, 201);
    }

    public function checkin(Request $request) {
        $event = Events::find(request('event_id'));
        $user = User::find(request('user_id'));

        if(!$event) {
            return response()->json(['error'=> 'Event not found']);
        }

        if(!$user) {
            return response()->json(['error'=> 'User not found']);
        }

        if($event->latitude != request('latitude') || $event->longitude != request('longitude') ) {
            return response()->json(['error'=> 'Checkin geolocation does not match Event geolocation']);
        }

        $checkin = Checkins::where
                        ('event_id', '=', request('event_id'))
                        ->where('user_id','=', request('user_id'))
                        ->where('status', '=', 0)
                        ->update([
                            "status" => 1,
                            "latitude" => request('latitude'),
                            "longitude" => request('longitude'),
                        ]);
        if(!$checkin) {
            return response()->json(['error'=> 'No submission from this user for this event or already checked in']);
        }

        return response()->json($request->all(), 201);
    }
}
