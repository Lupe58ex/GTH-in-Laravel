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
            'experienceRole_id',
            'company_id',
            'start_month'=>$this->start_month,
            'start_year'=>$this->start_year,
            'end_month'=>$this->end_month,
            'end_year'=>$this->end_year,
            'contractType_id',
            'functions'=>$this->functions,
            'user_id',
            'observations'=>$this->observations,
            'employee_id',
            'exit_reason'=>$this->exit_reason,
    ];
    }
}
