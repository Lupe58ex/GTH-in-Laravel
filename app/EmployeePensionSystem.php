<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePensionSystem extends Pivot
{
    //
    protected $fillable=[
        'actual',
        'comission_type',
        'employee_id',
        'pension_system_id'
    ];
    public function discounts(){
        return $this->hasMany(Discount::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
