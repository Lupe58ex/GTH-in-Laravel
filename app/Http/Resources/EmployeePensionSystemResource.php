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
            'comission_type'=>$this->comission_type,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'pension_system_id'=>$this->pension_system,
        ];
    }
}
