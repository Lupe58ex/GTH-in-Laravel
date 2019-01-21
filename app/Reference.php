<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    //
    protected $fillable =[
        'lastname_father',
        'lastname_mother',
        'name',
        'role',
        'phone_number',
        'business',
        'commets'
    ];
}
