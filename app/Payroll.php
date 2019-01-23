<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    //
    protected $fillable =[
        'month',
        'year',
        'user_id',
        'observations'
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
}
