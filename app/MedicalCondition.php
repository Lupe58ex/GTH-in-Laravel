<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCondition extends Model
{
    //
    protected $fillable = [
        'description',
        'expedition_date',
        'employee_id',
        'file',
        'expiration_date',
        'droped'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
