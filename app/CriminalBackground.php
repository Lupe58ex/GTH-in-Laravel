<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriminalBackground extends Model
{
    protected $fillable = [
        'description',
        'user_id',
        'expedition_date',
        'expiry_date',
        'employee_id',
        'document',
        'removed'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    Public function employee(){
        return $this->belonsTo(Employee::class);
    }
}
