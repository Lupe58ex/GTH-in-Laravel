<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name',
        'department_id'
    ];
    Public function employee(){
        return $this->hasMany(Employee::class);
    }
    Public function district(){
        return $this->hasMany(District::class);
    }
}
