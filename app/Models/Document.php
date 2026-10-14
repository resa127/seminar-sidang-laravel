<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'registration_id',
        'document_type',
        'file_path',
        'verification_status',
    ];
}