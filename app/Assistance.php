<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    //
    protected $fillable = [
        'date',
        'real_start_time',
        'real_end_time',
        'user_id',
        'employee_schedule_id',
        'justification'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function employeSchedule(){
        return $this->belongsTo(EmployeeSchedule::class);
    }
}
