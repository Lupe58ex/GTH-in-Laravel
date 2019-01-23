<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //
    protected $fillable = [
        'date',
        'user_id',
        'employee_id',
        'observation'
    ];
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
