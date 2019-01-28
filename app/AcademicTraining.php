<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicTraining extends Model
{
    //
    protected $fillable=[
        'description',
        'institute',
        'period',
        'condition',
        'user_id',
        'employee_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
