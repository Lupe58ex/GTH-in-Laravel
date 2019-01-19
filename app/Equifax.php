<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equifax extends Model
{
    //
    protected $fillable = [
        'description',
        'file',
        'employee_id',
        'user_id',
        'generation_date',
        'expire_date'
    ];
}
