<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonusDiscount extends Model
{
    protected $fillable =[
        'quantity',
        'reason',
        'employee_id',
        'user_id',
        'month',
        'year',
        'bonus_discount_category_id'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function bonusDiscountCategory(){
        return $this->belongTo(BonusDiscountCategory::class);
    }
    Public function user(){
        return $this->belongsTo(User::class);
    }

}
