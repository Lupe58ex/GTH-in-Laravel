<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->resource->load('schedules');
        //
        return $this->resource->map(function ($employee){
            return [
                // Employee::select(DB::raw("CONCAT(name, ' ', lastname_father,' ',lastname_mother) as fullname"))->where('id',$employees->id)->get(),
                'id' => $employee->id,
                'fullname' => $employee->fullname,
                'identity_number' => $employee->identity_number,
            ];
            
        });
    }
}
