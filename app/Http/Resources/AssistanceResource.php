<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssistanceResource extends JsonResource
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
            'id'=>$this->id,
            'date'=>$this->date,
            'real_start_time'=>$this->real_start_time,
            'real_end_time'=>$this->real_end_time,
            'user_id'=>UserResource::collection($this->user),
            'employee_schedule_id'=>EmployeeScheduleResource::collection($this->employee_schedule_id),
            'justification'=>$this->justification,
        ];
    }
}
