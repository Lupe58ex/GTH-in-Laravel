<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClosedAssistanceResource extends JsonResource
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
            'date'=>$this->date,
            'user_id'=>UserResource::collection($this->user),
            'employee_id'=>EmployeeResource::collection($this->employee),
            'observation'=>$this->observation,
        ];
    }
}
