<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
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
            'name_long'=>$this->name_long,
            'name_short'=>$this->name_short,
            'description'=>$this->description,
            'loan_evaluator'=>$this->loan_evaluator,
            'loan_promoter'=>$this->loan_promoter,
            'appears_in'=>$this->appears_in,
        ];
    }
}
