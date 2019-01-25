<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    //
    protected $fillable = [
        'name',
        'short_name',
        'suggested_duration',
        'description',
        'appears'
    ];
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
