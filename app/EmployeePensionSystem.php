<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
