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
            'area_id'=>AreaResource::collection($this->area),
            'role_id'=>RoleResource::collection($this->role),
            'company_id'=>CompanyResource::collection($this->company),
            'start_month'=>$this->start_month,
            'start_year'=>$this->start_year,
            'end_month'=>$this->end_month,
            'end_year'=>$this->end_year,
            'contract_type_id'=>ContractTypeResource::collection($this->contrat_type),
            'function'=>$this->function,
            'user_id'=>UserResource::collection($this->user),
            'observation'=>$this->observation,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'exit_reason'=>$this->exit_reason,
    ];
    }
}
