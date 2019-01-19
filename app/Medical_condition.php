<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_condition extends Model
{
    //
    protected $fillable = [
        'description',
        'user_id',
        'expedition_date',
        'employee_id',
        'document',
        'expired_date',
        'removed'
    ];
}
