<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cessation extends Model
{
    //
    protected $fillable =[
        'entry_date',
        'entry_reason',
        'cessation_date',
        'cessation_reason',
        'employee_id',
        'user_id'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    Public function user(){
        return $this->belongsTo(User::class);
    }

}
