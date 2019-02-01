<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable =[
        'start_hour',
        'end_hour',
        'description',
        'droped'
    ];

    public function employees() {
        return $this->belongsToMany(Employee::class,Employee_schedule)->withPivot('day','droped');
    }
    public function user1(){
        return $this->belongsTo(User::class,'user1_id');
    }
    public function user2(){
        return $this->belongsTo(User::class,'user2_id');
    }
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
    public function justifications(){
        return $this->hasMany(Justification::class);
    }

}
