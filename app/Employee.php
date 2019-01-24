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
            'identification_Type_id',
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
            'phone_Type1_id',
            'phone_Type2_id',
            'phone_Type3_id',
            'phone_Operator1_id',
            'phone_Operator2_id',
            'phone_Operator3_id',
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
            'job_Type_id',
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
            'financial_Entity_id',
            
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
    public function employeeRelative(){
        return $this->hasMany(EmployeeRelative::class);
    }
    

    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function identification_Type(){
        return $this->belongsTo(IdentificationType::class);
    }
    public function via(){
        return $this->belongsTo(Via::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }   
    public function phone_Type1(){
        return $this->belongsTo(PhoneType::class,'phone_Type1_id');
    }            
    public function phone_Type2(){
        return $this->belongsTo(PhoneType::class,'phone_Type2_id');
    }  
    public function phone_Type3(){
        return $this->belongsTo(PhoneType::class,'phone_Type3_id');
    }
    public function phone_Opertor1(){
        return $this->belongsTo(PhoneType::class,'phone_Operator1_id');
    }            
    public function phone_Operator2(){
        return $this->belongsTo(PhoneType::class,'phone_Operator2_id');
    }  
    public function phone_Operator3(){
        return $this->belongsTo(PhoneType::class,'phone_Operator3_id');
    }
    public function job_Type(){
        return $this->belongsTo(JobType::class);
    }
    public function financial_Entity(){
        return $this->belongsTo(FinancialEntity::class);
    }

    public function schedules() {
        return $this->belongsToMany(Schedule::class,EmployeeSchedule)->withPivot('day','droped');
    }
    public function references(){
        return $this->belongToMany(Reference::class,EmployeeReference)->withPivot('removed');
    }
    public function pensionSystems(){
        return $this->belongToMany(PensionSystem::class,EmployeePensionSystem)->withPivot('actual','comission_type','user_id','comission_on_flow','annual_comission','comission_for_flow','insurance_premium','mandatory_contribution');
    }
    public function relatives(){
        return $this->belongsToMany(Relative::class,EmployeeRelative)->withPivot('relationship','observation','bail_letter','guarantor','droped','student','employee1_id');
    }
   

}


