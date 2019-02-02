<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeRefenceResource extends JsonResource
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
            'removed'=>$this->removed,
            'employee_id'=>EmployeeResource::collection($this->employee_id),
            'reference_id'=>ReferenceResource::collection($this->reference_id),
        ];
    }
}
