<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class EmployeePensionSystem extends Pivot
{
    //
    protected $fillable=[
        'actual',
        'comission_type',
        'employee_id',
        'pension_system_id'
    ];
}
