<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'name',
        'province_id'
    ];
    Public function employee(){
        return $this->hasMany(Employee::class);
    }
    Public function provinces(){
        return $this->belolngTo(Province::class);
    }
}
