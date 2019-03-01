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
        return $this->resource->map(function ($employee){
            return [
                'start_hour'=>$employee->start_hour,
                'end_hour'=>$employee->end_hour,
                'description'=>$employee->description,
                'employee'=> $employee->employee
            ];  
        }); 
    }
    
}
