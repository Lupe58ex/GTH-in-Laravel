<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //
    protected $fillable = [
        'start_date',
        'end_date',
        'start_hour',
        'end_hour',
        'pension_option',
        'user_id',
        'employee_id',
        'reason'
    ];
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
