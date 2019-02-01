<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Via extends Model
{
    //
    protected $fillable =[
        'name_long',
        'name_short'
    ];
    public function employee(){
        return $this->hasMany(Employee::class);
    }
    public function relative_house(){
        return $this->hasMany(Relatives::class);
    }
    public function relative_job(){
        return $this->hasMany(Relatives::class);
    }

}
