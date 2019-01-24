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
    public function user(){
        return $this->belongsTo(User::class);
    }
}
