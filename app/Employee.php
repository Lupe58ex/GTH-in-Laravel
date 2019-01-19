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
            'active',
            'position_id',
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
            'role_id',
            'admission_date',
            'hire_date',
            'planning_date',
            'contract_term',
            'contract_type',
            'contract_image',
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
            'financial_entity_id',
            
            'bank_account',
            'student_children',
            
    ];

    public function licenses () {
        return $this->hasMany(License::class);
    }
    public function schedules() {
        return $this->belongsToMany(Schedule::class);
    }
}


