<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PensionSystem extends Pivot
{
    //
    protected $fillable = [
        'name',
        'short_name',
        'descripction',
        'actual_percent'
    ];
    public function employees(){
        return $this->belongsToMany(Employee::class);
    }
}
