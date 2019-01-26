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
            'employee_id',
            'user_id',
            'generated_date'=>$this->genertaed_date,
            'expired_date'=>$this->expired_date,
        ];
    }
}
