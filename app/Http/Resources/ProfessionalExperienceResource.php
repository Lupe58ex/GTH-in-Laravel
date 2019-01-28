<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfessionalExperienceResource extends JsonResource
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
            'area'=>$this->area,
            'experienceRole_id'=>ExperienceRoleResource::collection($this->experienceRole),
            'company_id'=>CompanyResource::collection($this->company),
            'start_month'=>$this->start_month,
            'start_year'=>$this->start_year,
            'end_month'=>$this->end_month,
            'end_year'=>$this->end_year,
            'contractType_id'=>ContractTypeResource::collection($this->contratType),
            'functions'=>$this->functions,
            'user_id'=>UserResource::collection($this->user),
            'observations'=>$this->observations,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'exit_reason'=>$this->exit_reason,
    ];
    }
}
