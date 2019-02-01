<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneratedPayroll extends Model
{
    //
    protected $fillable = [
        'month',
        'year',
        'employee_id',
        'real_salary',
        'payroll_salary',
        'quantity_consider',
        'household_allowance',
        'role_bonus',
        'bonus',
        'commission',
        'holiday_bonus',
        'salary_advance',
        'discount',
        'permission',
        'license',
        'tardiness',
        'onp',
        'pension_system_quantity',
        'essalud',
        'business_quantity',
        'employee_quantity'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
