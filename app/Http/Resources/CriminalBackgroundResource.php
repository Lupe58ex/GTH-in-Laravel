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
            'user_id',
            'expedition_date'=>$this->expiration_date,
            'expiry_date'=>$this->expiry_date,
            'employee_id',
            'document'=>$this->document,
            'removed'=>$this->removed,
        ];
    }
}
