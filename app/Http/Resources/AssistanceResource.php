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
            'user_id'=>User::find($this->user_id),
            'employee_schedule_id'=>EmployeeSchedule::find($this->employee_schedule_id),
            'justification'=>$this->justification,
        ];
    }
}
