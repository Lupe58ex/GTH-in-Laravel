<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriminalBackground extends Model
{
    protected $fillable = [
        'description',
        'expedition_date',
        'expiration_date',
        'employee_id',
        'file',
        'droped'
    ];
    Public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
