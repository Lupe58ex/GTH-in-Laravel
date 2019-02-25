<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialEntity extends Model
{
    //
    protected $fillable = [
        'name_long',
        'name_short'
    ];
    public function employee(){
        return $this->hasMany(Employee::class);
    }
}
