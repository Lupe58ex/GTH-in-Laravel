<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BonusDiscountResource extends JsonResource
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
            'quantity'=>$this->quantity,
            'reason'=>$this->reason,
            'employee_id'=>EmployeeResource::collection($this->employee),
            'user_id'=>UserResource::collection($this->user),
            'for_month'=>$this->for_month,
            'for_year'=>$this->for_year,
            'bonus_discount_category_id'=>BonusDiscountCategoryResource::collection($this->bonusDiscountCategory),
        ];
    }
}
