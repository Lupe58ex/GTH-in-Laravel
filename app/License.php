<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //
    protected $fillable = [

    ];
    public function employee() {
        return $this->belongsTo(User::class);
    }
}
