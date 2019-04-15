<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkins extends Model
{
    protected $fillable = [
        'status',
        'event_id',
        'user_id',
        'latitude',
        'longitude'
    ];
}
