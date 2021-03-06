<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractTypeResource extends JsonResource
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
            'name'=>$this->name,
            'short_name'=>$this->short_name,
            'suggested_duration'=>$this->suggested_duration,
            'appears_in'=>$this->appears,
        ];
    }
}
