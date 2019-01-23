<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneType extends Model
{
    //
    protected $fillable =[
        'name_long',
        'name_short'
    ];

    public function employee1(){
        return $this->hasMany(Employee::class,'id','phoneType1_id');
    }
    public function employee2(){
        return $this->hasMany(Employee::class,'id','phoneType2_id');
    }
    public function employee3(){
        return $this->hasMany(Employee::class,'id','phoneType3_id');
    }
}
