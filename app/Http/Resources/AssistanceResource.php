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
            'employee_id',
            'planned_start_hour'=>$this->planned_start_hour,
            'planned_end_hour'=>$this->planned_end_hour,
            'real_start_time'=>$this->real_start_time,
            'real_end_time'=>$this->real_end_time,
            'user_id',
            'schedule_id',
            'observation'=>$this->observation,
            'no_attendance'=>$this->no_attendance,
            'discount_quantity'=>$this->discount_quantity,
            'observations'=>$this->observations,
            'justification_id'
        ];
    }
}
