<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscountResource extends JsonResource
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
            'month'=>$this->month,
            'year'=>$this->year,
            'employee_pension_system_id'=>EmployeePensionSystemResource::collection($this->employee_pemsion_system),
            'percent_discount'=>$this->percent_discount,
            'discount_quantity'=>$this->discount_quantity,
            'user_id'=>UserResource::collection($this->user),
            'observations'=>$this->observations,
        ];
    }
}
