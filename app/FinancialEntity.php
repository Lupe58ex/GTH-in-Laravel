<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialEntity extends Model
{
    //
    protected $fillable = [
        'large_name',
        'short_name'
    ];
    public function employee(){
        return $this->hasMany(Employee::class);
    }
}
