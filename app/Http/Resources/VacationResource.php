<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VacationResource extends JsonResource
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
            'employee_id',
            'start_period'=>$this->start_period,
            'end_period'=>$this->end_period,
        ];
    }
}
