<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
