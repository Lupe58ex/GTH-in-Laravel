<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCondition extends Model
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
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
