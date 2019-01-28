<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeePensionSystemResource extends JsonResource
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
            'actual'=>$this->actual,
            'user_id'=>UserResource::collection($this->user),
            'comission_type'=>$this->comission_type,
            'comission_on_flow'=>$this->comission_on_flow,
            'annual_comission'=>$this->annual_comission,
            'comission_for_flow'=>$this->comission_for_flow,
            'insurance_premium'=>$this->insurance_premium,
            'mandatory_contribution'=>$this->mandatory_contribution,
        ];
    }
}
