<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PensionSystem extends Model
{
    //
    protected $fillable = [
        'name',
        'short_name',
        'description',
        'actual_percent',
        'comission_on_flow',
        'annual_comission',
        'comission_for_flow',
        'insurance_premium',
        'mandatory_contribution',
    ];
    public function employees(){
        return $this->belongsToMany(Employee::class);
    }
}
