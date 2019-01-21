<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    //
    protected $fillable = [
        'name',
        'lastname_mother',
        'lastname_father',
        'gender',
        'birthdate',
        'cellphone',
        'house_via',
        'house_address',
        'job_via',
        'job_address',
        'place_job',
        'DNI',
        'full_age',
        'address_image',
        'student',
        'reference'
    ];
}
