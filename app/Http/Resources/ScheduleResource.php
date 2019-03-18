<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
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
            'start_hour'=>$this->start_hour,
            'end_hour'=>$this->end_hour,
            'turn' =>$this->turn,
            'description'=>$request->description,
        ];
          
    }
    
}
