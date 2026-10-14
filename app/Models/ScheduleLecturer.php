<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleLecturer extends Model
{
    protected $fillable = [
        'schedule_id',
        'lecturer_id',
        'role',
    ];
}