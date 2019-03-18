<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];
    Public function employee(){
        return $this->hasMany(Employee::class);
    }
    Public function provinces(){
        return $this->hasMany(Province::class);
    }
}
