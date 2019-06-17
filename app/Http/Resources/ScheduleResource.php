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
        return $this->resource->map(function ($schedule){
            return [
                'id'=>$schedule->id,
                'start_hour'=>$schedule->start_hour,
                'end_hour'=>$schedule->end_hour,
                'turn' =>$schedule->turn,
                'description'=>$schedule->description,
            ];
        });
    }
    
}
