<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneOperator extends Model
{
    //
    protected $fillable = [
        'name_short',
        'name_long'
    ];
    public function employee1(){
        return $this->hasMany(Employee::class,'id','phone_operator1_id');
    }
    public function employee2(){
        return $this->hasMany(Employee::class,'id','phone_operator2_id');
    }
    public function employee3(){
        return $this->hasMany(Employee::class,'id','phone_operator3_id');
    }


}
