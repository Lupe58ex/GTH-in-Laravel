<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable =[
        'name_long',
        'name_short',
        'description',
        'loan_evaluator',
        'loan_promoter',
        'appears_in'
    ];
    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }

}
