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
        'employee_schedules_id',
        'justification'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
    public function justification(){
        return $this->belongsTo(Justification::class);
    }
}
