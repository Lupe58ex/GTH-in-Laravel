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
        return $this->belongsToMany(Employee::class,EmployeeRelative)->withPivot('employee1_id','relationship','observation','bail_letter','guarantor','droped','is_student');
    }
    public function viajob(){
        return $this->belongsTo(via::class,'job_via_id');
    }
    public function viahouse(){
        return $this->belongsTo(via::class,'house_via_id');
    }
}
