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
        'user1_id',
        'droped',
        'user2_id',
    ];

    public function employees() {
        return $this->belongsToMany(Employee::class,Employee_schedule)->withPivot('start_hour','end_hour', 'description','user1_id', 'droped','user2_id');
    }
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
}
