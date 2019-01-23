<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $fillable=[
        'month',
        'year',
        'employee_pension_system_id',
        'percent_discount',
        'discount_quantity',
        'user_id',
        'observations',
    ];

    public function employeePensionSystem(){
        return $this->belongsTo(EmployeePensionSystem::class);
    }
    public function user(){
        return $this->belongTo(User::class);
    }
}
