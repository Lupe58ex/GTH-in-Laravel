<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonusDiscountCategory extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'enabled',
        'appears_in'
    ];
    public function bonusDiscounts(){
        return $this->hasMany(BonusDiscount::class);
    }
}
