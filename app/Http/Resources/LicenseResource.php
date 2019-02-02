<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LicenseResource extends JsonResource
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
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'start_hour'=>$this->start_hour,
            'end_hour'=>$this->end_hour,
            'pension_option'=>$this->pension_option,
            'user_id'=>UserResource::collection($this->user),
            'employee_id'=>EmployeeResource::collection($this->employee),
            'reason'=>$this->reason,
        ];
    }
}
