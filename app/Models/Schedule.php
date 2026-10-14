<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'registration_id',
        'schedule_date',
        'start_time',
        'room',
    ];
}