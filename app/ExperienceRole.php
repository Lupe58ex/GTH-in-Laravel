<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceRole extends Model
{
    //
    protected $fillable =[
        'name',
        'description'
    ];
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }
}
