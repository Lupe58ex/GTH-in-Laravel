<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date_close extends Model
{
    //
    Protected $fillable = [
        'date',
        'user_id',
        'observation'
    ];
    public function User(){
        return $this->belongsTo(Date_close::class);
    }
}
