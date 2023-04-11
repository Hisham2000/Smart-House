<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
    use HasFactory;

    protected $table = 'alerts';
    protected $fillable = [
        'message',
        'user_id',
        'state',
        'date',
        'time'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
