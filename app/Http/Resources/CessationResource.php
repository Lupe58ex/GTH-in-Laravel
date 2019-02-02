<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CessationResource extends JsonResource
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
            'entry_date'=>$this->entry_date,
            'entry_reason'=>$this->entry_reason,
            'cessation_date'=>$this->cessation_date,
            'cessation_reason'=>$this->cessation_reason,
            'employee_id'=>EmployeeResource::collection($this->employee),
        ];
    }
}
