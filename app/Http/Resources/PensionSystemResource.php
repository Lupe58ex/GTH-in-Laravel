<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PensionSystemResource extends JsonResource
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
            'description'=>$this->description,
            'comission_on_flow'=>$this->comission_on_flow,
            'annual_comission'=>$this->annual_comission,
            'comission_for_flow'=>$this->comission_for_flow,
            'insurance_premium'=>$this->insurance_premium,
            'mandatory_contribution'=>$this->mandatory_contribution,
        ];
    }
}
