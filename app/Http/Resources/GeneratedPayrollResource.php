<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GeneratedPayrollResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'month'=>$this->month,
            'year'=>$this->year,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'real_salary'=>$this->real_salary,
            'payroll_salary'=>$this->payroll_salary,
            'quantity_consider'=>$this->quantity_consider,
            'household_allowance'=>$this->household_allowance,
            'role_bonus'=>$this->role_bonus,
            'bonus'=>$this->bonus,
            'commission'=>$this->commission,
            'holiday_bonus'=>$this->holiday_bonus,
            'salary_advance'=>$this->salary_advance,
            'discount'=>$this->discount,
            'permission'=>$this->permission,
            'license'=>$this->license,
            'tardiness'=>$this->tardiness,
            'onp'=>$this->onp,
            'pension_system_quantity'=>$this->pension_system_quantity,
            'essalud'=>$this->essalud,
            'business_quantity'=>$this->business_quantity,
            'employee_quantity'=>$this->employee_quantity,
        ];
    }
}
