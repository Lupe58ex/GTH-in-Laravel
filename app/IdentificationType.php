<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    //
    protected $fillable = [
        'name_long',
        'name_short',
    ];
    public function employees(){
        return $this->hasMany(Employee::class);
    }

}
