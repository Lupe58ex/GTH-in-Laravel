<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    //
    protected $fillable = [
        'name',
        'lastname_mother',
        'lastname_father',
        'gender',
        'birthdate',
        'cellphone',
        'house_via_id',
        'house_address',
        'job_via_id',
        'job_address',
        'place_job',
        'dni',
        'full_age',
        'address_file',
        'is_student',
        'reference'
    ];
    public function employees(){
        return $this->belongsToMany(Employee::class,EmployeeRelative)->withPivot();
    }
}
