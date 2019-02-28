<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class EmployeeReference extends Pivot
{
    //
    protected $fillable=[
        'removed',
        'employee_id',
        'reference_id',
    ];

}
