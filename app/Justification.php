<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    //
    protected $fillable = [
        'reason',
        'justified_date',
        'schedule_id',
        'user_id',
        'observation',
        'is_discount'
    ];
}
