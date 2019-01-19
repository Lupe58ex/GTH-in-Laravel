<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
       'large_name',
        'short_name',
        'description'
    ];
}
