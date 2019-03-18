<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable =[
        'id',
        'turn',
        'start_hour',
        'end_hour',
        'description',
        'enable'
    ];

    public function employees() {
        return $this->belongsToMany(Schedule::class,EmployeeSchedule)->withPivot('day','droped');
    }
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
}
