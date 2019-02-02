<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CriminalBackgroundResource extends JsonResource
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
            'expedition_date'=>$this->expiration_date,
            'expiration_date'=>$this->expiration_date,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'file'=>$this->file,
            'droped'=>$this->droped,
        ];
    }
}
