<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional_experience extends Model
{
    //
    protected $fillable=[
        'area',
        'experience_role_id',
        'company_id',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'contract_type_id',
        'functions',
        'user_id',
        'observations',
        'employee_id',
        'exit_reason'
    ];
}
