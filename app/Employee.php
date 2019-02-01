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
            'identification_type_id',
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
            'enabled',
            'role_id',
            'phone_number01',
            'phone_number02',
            'phone_number03',
            'phone_type1_id',
            'phone_type2_id',
            'phone_type3_id',
            'phone_operator1_id',
            'phone_operator2_id',
            'phone_operator3_id',
            'phone_notes01',
            'phone_notes02',
            'phone_notes03',
            'photo',
            'date_update_photo',
            'admission_date',
            'hire_date',
            'planning_date',
            'contract_term',
            'contract_type_id',
            'contract_file',
            'real_end_hiredate',
            'job_type_id',
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
            'area_id',
            'clothing_size',

            'newsletter',
            'linkedln',
            'medical_status',

            'driver_license_number',
            'date_expedition_driver_license',
            'sellbydate_driver_license',
            'type_driver_license',

            'file_schedule',
            'date_update_schedule',

            'cuspp',
            'bank_account_number',
            'payment_type',
            'financial_entity_id',

            'bank_account',
            'student_children',

    ];
    //
    public function licenses () {
        return $this->hasMany(License::class);
    }
    //
    public function academicTrainings(){
        return $this->hasMany(Academic_Training::class);
    }

    //
    public function bonusDiscounts(){
        return $this->hasMany(Bonus_Discount::class);
    }
    //
    public function cessations(){
        return $this->hasMany(Cessation::class);
    }
    //
    public function closedAssitances(){
        return $this->hasMany(ClosedAssistances::class);
    }
    //
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
    //
    public function criminalBackgrounds(){
        return $this->hasMany(CriminalBackground::class);
    }
    //
    public function central_risks(){
        return $this->hasMany(CentralRisk::class);
    }
    //
    public function generatedPayrolls(){
        return $this->hasMany(GeneratedPayroll::class);
    }
    //
    public function medicalConditions(){
        return $this->hasMany(MedicalCondition::class);
    }
    //
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }
    //
    public function vacations(){
        return $this->hasMany(Vacation::class);
    }
    //
    public function employeeRelatives(){
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
    public function phoneType1(){
        return $this->belongsTo(PhoneType::class,'phone_type1_id');
    }
    public function phoneType2(){
        return $this->belongsTo(PhoneType::class,'phone_type2_id');
    }
    public function phoneType3(){
        return $this->belongsTo(PhoneType::class,'phone_type3_id');
    }
    public function phoneOpertor1(){
        return $this->belongsTo(PhoneType::class,'phone_operator1_id');
    }
    public function phoneOperator2(){
        return $this->belongsTo(PhoneType::class,'phone_operator2_id');
    }
    public function phoneOperator3(){
        return $this->belongsTo(PhoneType::class,'phone_operator3_id');
    }
    public function jobType(){
        return $this->belongsTo(JobType::class);
    }
    public function financialEntity(){
        return $this->belongsTo(FinancialEntity::class);
    }
    public function contractType(){
        return $this->belongsTo(ContractType::class);
    }
    //
    public function schedules() {
        return $this->belongsToMany(Schedule::class,EmployeeSchedule)->withPivot('day','droped');
    }
    //
    public function references(){
        return $this->belongToMany(Reference::class,EmployeeReference)->withPivot('removed');
    }
    //
    public function pension_systems(){
        return $this->belongToMany(PensionSystem::class,EmployeePensionSystem)->withPivot('actual','comission_type');
    }
    //
    public function relatives(){
        return $this->belongsToMany(Employee::class,EmployeeRelative)->withPivot('employee1_id','relationship','observation','bail_letter','guarantor','droped','is_student');
    }


}


