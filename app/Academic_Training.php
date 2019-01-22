<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic_Training extends Model
{
    //
    protected $fillable=[
        'description',
            'institute',
            'period',
            'condition',
            'user_id',
            'employee_id'
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Employee(){
        return $this->belongsTo(Employee::class);
    }


}
