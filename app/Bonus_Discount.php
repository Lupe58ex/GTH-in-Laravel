<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus_Discount extends Model
{
    //
    protected $fillable =[
        'quantity',
        'reason',
        'employee_id',
        'user_id',
        'month',
        'year',
        'bonus_discount_category_id'
    ];
}
