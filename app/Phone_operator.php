<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone_operator extends Model
{
    //
    protected $fillable = [
        'name_long',
        'name_short'
    ];
}
