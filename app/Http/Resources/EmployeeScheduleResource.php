<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeScheduleResource extends JsonResource
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
            'day'=>$this->day,
            'droped'=>$this->droped,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'schedule_id'=>ScheduleResource::collection($this->schedule),
        ];
    }
}
