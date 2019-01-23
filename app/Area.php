<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'internal_code'
    ];
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
