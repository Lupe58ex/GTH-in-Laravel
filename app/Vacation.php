<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    //
    protected $fillable =[
        'start_date',
        'end_date',
        'employee_id',
        'start_period',
        'end_period'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
