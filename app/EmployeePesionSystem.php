<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePesionSystem extends Pivot
{
    //
    public function discounts(){
        return $this->hasMany(Discount::class);
    }
}
