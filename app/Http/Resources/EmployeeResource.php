<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Employee;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        $this->resource->load('schedules');
        
        return $this->resource->map(function ($employee){
            return [
                //Employee::select(DB::raw("CONCAT(name, ' ', lastname_father,' ',lastname_mother) as fullname"))->where('id',$employees->id)->get(),
                'id' => $employee->id,
                'fullname' => $employee->fullname,
                'schedules' => new ScheduleResource($employee->schedules)
            ];
            
        }); 
        /*return [
            'name'=>$this->name,
            'lastname_father'=>$this->lastname_father,
            'lastname_mother'=>$this->lastname_mother,
            'identity_number'=>$this->identity_number,
            'identification_type_id'=>IdentificationTypeResource::collection($this->identification_Type),
            'gender'=>$this->gender,
            'birthdate'=>$this->birthdate,
            'district'=>$this->disctric,
            'province'=>$this->province,
            'department'=>$this->department,
            'via_id'=>ViaResource::collection($this->via),
            'address'=>$this->address,
            'address_reference'=>$this->address_reference,
            'address_sketch'=>$this->address_sketh,
            'email_main'=>$this->email_name,
            'email_alternative'=>$this->email_alternative,
            'enable'=>$this->enable,
            'role_id'=>RoleResource::collection($this->role),
            'phone_number01'=>$this->phone_number01,
            'phone_number02'=>$this->phone_number02,
            'phone_number03'=>$this->phone_number03,
            'phone_type1_id'=>PhoneTypeResource::collection($this->phone_type1),
            'phone_type2_id'=>PhoneTypeResource::collection($this->phone_type2),
            'phone_type3_id'=>PhoneTypeResource::collection($this->phone_type3),
            'phone_operator1_id'=>PhoneOperatorResource::collection($this->phone_operator1),
            'phone_operator2_id'=>PhoneOperatorResource::collection($this->phone_operator2),
            'phone_operator3_id'=>PhoneOperatorResource::collection($this->phone_operator3),
            'phone_notes01'=>$this->phone_notes01,
            'phone_notes02'=>$this->phone_notes02,
            'phone_notes03'=>$this->phone_notes03,
            'photo'=>$this->photo,
            'date_update_photo'=>$this->date_update_photo,
            'admission_date'=>$this->admission_date,
            'hire_date'=>$this->hire_date,
            'planning_date'=>$this->planning_date,
            'contract_term'=>$this->contract_term,
            'contract_type_id'=>ContractTypeResource::collection($this->contract_type),
            'contract_file'=>$this->contract_file,
            'real_end_hiredate'=>$this->real_end_hiredate,
            'job_type_id'=>JobTypeResource::collection($this->job_type),
            'work_modality'=>$this->work_modality,
            'projected_number_time'=>$this->projected_number_time,
            'projected_unity_time'=>$this->projected_unity_time,
            'date_cessation'=>$this->date_cessation,
            'reason_cessation'=>$this->reason_cessation,

            'salary_advance_allowed'=>$this->salary_advance_allowed,
            'salary'=>$this->salary,
            'payrollsalary'=>$this->payrollsalary,

            'marital_status'=>$this->marital_status,
            'home_condition'=>$this->home_condition,
            'number_of_children'=>$this->number_of_children,
            'registerphoto_date'=>$this->registerPhoto_date,
            'availability_travel'=>$this->availability_travel,
            'area_id'=>AreaResource::collection($this->work_area),
            'clothing_size'=>$this->clothing_size,

            'newsletter'=>$this->newsletter,
            'linkedln'=>$this->linkedln,
            'medical_status'=>$this->medical_status,

            'driver_license_number'=>$this->driver_license_number,
            'date_expedition_driver_license'=>$this->date_expedition_driver_license,
            'sellbydate_driver_license'=>$this->sellbydate_driver_license,
            'type_driver_license'=>$this->type_driver_license,

            'file_schedule'=>$this->file_schedule,
            'date_update_schedule'=>$this->date_update_schedule,

            'cuspp'=>$this->cuspp,
            'bank_account_number'=>$this->bank_account_number,
            'payment_type'=>$this->payment_type,
            'financial_entity_id'=>FinancialEntityResource::collection($this->financial_entity),

            'bank_account'=>$this->bank_account,
            'student_children'=>$this->student_children,

            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];*/
    }
}
