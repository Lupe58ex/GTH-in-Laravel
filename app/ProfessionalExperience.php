<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalExperience extends Model
{
    //
    protected $fillable=[
        'area',
        'experienceRole_id',
        'company_id',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'contractType_id',
        'functions',
        'user_id',
        'observations',
        'employee_id',
        'exit_reason'
    ];
    public function experienceRole(){
        return $this->belongsTo(ExperienceRole::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function contractType(){
        return $this->belongsTo(ContractType::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
