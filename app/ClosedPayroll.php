<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClosedPayroll extends Model
{
    //
    protected $fillable =[
        'month',
        'year',
        'user_id',
        'observation'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
