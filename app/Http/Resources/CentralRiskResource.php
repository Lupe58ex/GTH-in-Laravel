<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CentralRiskResource extends JsonResource
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
            'description'=>$this->description,
            'file'=>$this->file,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'user_id'=>UserResource::collection($this->user),
            'expedition_date'=>$this->expedition_date,
            'expiration_date'=>$this->expiration_date,
        ];
    }
}
