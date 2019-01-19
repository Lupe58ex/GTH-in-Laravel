<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic_Training extends Model
{
    //
    protected $fillable=[
        'description',
            'institute',
            'period',
            'condition',
            'user_id',
            'employee_id'
    ];
}
