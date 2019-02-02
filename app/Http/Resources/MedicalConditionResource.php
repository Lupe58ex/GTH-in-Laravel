<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicalConditionResource extends JsonResource
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
            'description'=>$this->description,
            'expedition_date'=>$this->expedition_date,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'file'=>$this->file,
            'expiration_date'=>$this->expiration_date,
            'droped'=>$this->droped,
        ];
    }
}
