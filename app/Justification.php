<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    //
    protected $fillable = [
        'reason',
        'justified_date',
        'schedule_id',
        'user_id',
        'observation',
        'is_discount'
    ];
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function assistances(){
        return $this->hasMany(Assistance::class);
    }
}
