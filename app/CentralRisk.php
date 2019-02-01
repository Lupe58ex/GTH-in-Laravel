<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentralRisk extends Model
{
    //
    protected $fillable = [
        'description',
        'file',
        'employee_id',
        'user_id',
        'expedition_date',
        'expiration_date'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
