<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClosedPayrollResource extends JsonResource
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
            'month'=>$this->month,
            'year'=>$this->year,
            'user_id'=>UserResource::collection($this->user),
            'observation'=>$this->observation,
        ];
    }
}
