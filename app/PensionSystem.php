<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PensionSystem extends Pivot
{
    //
    protected $fillable = [
        'name',
        'short_name',
        'descripction',
        'actual_percent'
    ];
}
