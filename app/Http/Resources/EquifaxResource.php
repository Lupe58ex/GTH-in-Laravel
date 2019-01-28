<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EquifaxResource extends JsonResource
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
            'generation_date'=>$this->generation_date,
            'expire_date'=>$this->expire_date,
        ];
    }
}
