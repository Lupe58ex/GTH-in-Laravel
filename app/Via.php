<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Via extends Model
{
    //
    protected $fillable =[
        'start_date',
        'end_date',
        'employee_id',
        'start_period',
        'end_period'
    ];
}
