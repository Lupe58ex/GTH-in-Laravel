<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EmployeeSchedule extends Pivot
{
    //
    protected $fillable=[
        'employee_id',
        'schedule_id',
        'day',
        'droped'
    ];
    public function assistances(){
        return $this->hasMany(Assistance::class);
    }
    /*public function employees(){
        return $this->belongsTo(Employee::class);
    }
    public function schedules(){
        return $this->belongsTo(Schedule::class);
    }*/
}
