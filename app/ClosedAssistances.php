<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClosedAssistances extends Model
{
    Protected $fillable = [
        'date',
        'user_id',
        'employee_id',
        'observation'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
 }
