<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalExperience extends Model
{
    //
    protected $fillable=[
        'area_id',
        'role_id',
        'company_id',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'contract_type_id',
        'function',
        'user_id',
        'observation',
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
