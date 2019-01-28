<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DateCloseResource extends JsonResource
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
            'date'=>$this->date,
            'user_id'=>UserResource::collection($this->user),
            'observation'=>$this->observation,
        ];
    }
}
