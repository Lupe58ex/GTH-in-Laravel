<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    //
    protected $fillable = [
        'varchar',
        'name_short'
    ];
    public function employee(){
        return $this->hasMany(Employee::class);
    }
   
}
