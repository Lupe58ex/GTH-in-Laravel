<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable=[

            'name',
            'lastname_father',
            'lastname_mother',
            'identity_number',
            'identificationType_id',
            'gender',
            'birthdate',
            'district',
            'province',
            'department',
            'via_id',
            'address',
            'address_reference',
            'address_sketch',
            'email_main',
            'email_alternative',
            'active',
            'role_id',
            'phone_number01',
            'phone_number02',
            'phone_number03',
            'phoneType1_id',
            'phoneType2_id',
            'phoneType3_id',
            'phoneOperator1_id',
            'phoneOperator2_id',
            'phoneOperator3_id',
            'phone_notes01',
            'phone_notes02',
            'phone_notes03',
            'photo',
            'date_update_photo',
            'admission_date',
            'hire_date',
            'planning_date',
            'contract_term',
            'contract_type',
            'contract_image',
            'real_end_hiredate',
            'jobType_id',
            'work_modality',
            'projected_number_time',
            'projected_unity_time',
            'date_cessation',
            'reason_cessation',

            'salary_advance_allowed',
            'salary',
            'payrollsalary',
            
            'marital_status',
            'home_condition',
            'number_of_children',
            'registerphoto_date',
            'availability_travel',
            'work_area',
            'clothing_size',
            
            'newsletter',
            'linkedln',
            'medical_status',
            
            'driver_license_number',
            'date_expedition_driver_license',
            'sellbydate_driver_license',
            'type_driver_license',
            
            'image_schedule',
            'date_update_schedule',

            'cuspp',
            'bank_account_number',
            'payment_type',
            'financialEntity_id',
            
            'bank_account',
            'student_children',
            
    ];

    public function licenses () {
        return $this->hasMany(License::class);
    }
    public function academicTrainings(){
        return $this->hasMany(Academic_Training::class);
    }
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
    public function bonusDiscounts(){
        return $this->hasMany(Bonus_Discount::class);
    }
    public function cessations(){
        return $this->hasMany(Cessation::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
    public function criminalBackgrounds(){
        return $this->hasMany(CriminalBackground::class);
    }
    public function equifaxes(){
        return $this->hasMany(Equifax::class);
    }
    public function generatedPayrolls(){
        return $this->hasMany(GeneratedPayroll::class);
    }
    public function medicalConditions(){
        return $this->hasMany(MedicalCondition::class);
    }
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }
    public function vacations(){
        return $this->hasMany(Vacation::class);
    }
    

    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function identificationType(){
        return $this->belongsTo(IdentificationType::class);
    }
    public function via(){
        return $this->belongsTo(Via::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }   
    public function phoneType1(){
        return $this->belongsTo(PhoneType::class,'phoneType1_id');
    }            
    public function phoneType2(){
        return $this->belongsTo(PhoneType::class,'phoneType2_id');
    }  
    public function phoneType3(){
        return $this->belongsTo(PhoneType::class,'phoneType3_id');
    }
    public function phoneOpertor1(){
        return $this->belongsTo(PhoneType::class,'phoneOperator1_id');
    }            
    public function phoneOperator2(){
        return $this->belongsTo(PhoneType::class,'phoneOperator2_id');
    }  
    public function phoneOperator3(){
        return $this->belongsTo(PhoneType::class,'phoneOperator3_id');
    }
    public function schedules() {
        return $this->belongsToMany(Schedule::class,Employee_schedule)->withPivot('day','droped');
    }
    public function jobType(){
        return $this->belongsTo(JobType::class);
    }
    public function financialEntity(){
        return $this->belongsTo(FinancialEntity::class);
    }
   

}


