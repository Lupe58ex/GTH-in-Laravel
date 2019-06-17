<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonusDiscountCategory extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'enable',
        'appears_in'
    ];
    public function bonus_discounts(){
        return $this->hasMany(BonusDiscount::class);
    }
}
