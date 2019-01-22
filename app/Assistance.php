<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    //
    protected $fillable = [
        'date',
        'employee_id',
        'planned_start_hour',
        'planned_end_hour',
        'real_start_time',
        'real_end_time',
        'user_id',
        'schedule_id',
        'observation',
        'no_attendance',
        'discount_quantity',
        'observations',
        'justification'
    ];
    public function Employee(){
        return $this->belongsTo(Employee::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Schedule(){
        return $this->belonsTo(Schedule::class);
    }
}
