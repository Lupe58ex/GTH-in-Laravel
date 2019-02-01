<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeSchedule extends Pivot
{
    //
    protected $fillable=[
        'employee_id',
        'schedule_id',
        'day',
        'droped'
    ];
}
