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
        'user_id',
        'generated_date',
        'expired_date'
    ];
}
