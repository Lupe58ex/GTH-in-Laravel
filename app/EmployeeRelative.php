<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRelative extends Pivot
{
    //
    protected $fillable =[
        'relationship',
        'observation',
        'bail_letter',
        'guarantor',
        'droped',
        'student',
        'employee1_id',
        'relative_id',
        'employee_id'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class,'employee1_id');
    }

}
