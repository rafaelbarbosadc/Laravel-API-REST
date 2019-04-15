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
            return response()->json([
                'error' => 01,
                'message' => 'Event not found'
            ], 204);
        }
        if(!$user) {
            return response()->json([
                'error' => 02,
                'message' => 'User not found'
            ], 204);
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
            return response()->json([
                'error' => 01,
                'message' => 'Event not found'
            ], 204);
        }

        if(!$user) {
            return response()->json([
                'error' => 02,
                'message' => 'User not found'
            ], 204);
        }

        if($event->latitude != request('latitude') || $event->longitude != request('longitude') ) {
            return response()->json([
                'error' => 03,
                'message' => ' Checkin geolocation does not match Event geolocation'
            ], 204);
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
            return response()->json([
                'error' => 04,
                'message' => 'No submission from this user for this event or already checked in'
            ], 204);
        }

        return response()->json($request->all(), 201);
    }
}
