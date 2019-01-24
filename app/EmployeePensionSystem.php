<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePensionSystem extends Pivot
{
    //
    protected $fillable=[
        'actual',
        'user_id',
        'comission_type',
        'comission_on_flow',
        'annual_comission',
        'comission_for_flow',
        'insurance_premium',
        'mandatory_contribution'
    ];
    public function discounts(){
        return $this->hasMany(Discount::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
