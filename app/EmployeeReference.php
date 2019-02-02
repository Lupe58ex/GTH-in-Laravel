<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeReference extends Pivot
{
    //
    protected $fillable=[
        'removed',
        'employee_id',
        'reference_id',
    ];

}
