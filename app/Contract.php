<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable =[
        'description',
        'file',
        'employee_id',
        'expedition_date',
        'expiration_date'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
