<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
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
            'expedition_date'=>$this->expedition_date,
            'expiration_date'=>$this->expiration_date,
        ];
    }
}
