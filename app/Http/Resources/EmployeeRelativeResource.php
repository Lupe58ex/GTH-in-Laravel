<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeRelativeResource extends JsonResource
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
            'relationship'=>$this->relationship,
            'observation'=>$this->observation,
            'bail_letter'=>$this->bail_letter,
            'guarantor'=>$this->guarantor,
            'droped'=>$this->droped,
            'student'=>$this->student,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'employee1_id'=>EmployeeResource::collection($this->employee1),
            'relative_id'=>RelativeResource::collection($this->relative),
        ];
    }
}
