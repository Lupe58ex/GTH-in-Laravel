<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeSchedule extends Pivot
{
    //
    protected $fillable=[
        'day','droped'
    ];
}
