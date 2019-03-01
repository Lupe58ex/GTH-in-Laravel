<?php

namespace App\Http\Resources;

use App\Employee;
use App\Schedule;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeScheduleResource extends JsonResource
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
        $this->resource->load('employees');
        $this->resource->load('schedules');
            return [
            'day'=>$employee->day,
            'droped'=>$employee->droped,
            'employee'=>new EmployeeResource($employee->employees),
            'schedule'=>new ScheduleResource($employee->schedules),
            ];

        /*
        $this->resource->load('employees');
        $this->resource->load('schedules');
            return [
            'day'=>$this->day,
            'droped'=>$this->droped,
            'employee'=>new EmployeeResource(Employee::find($this->employee_id)),
            'schedule'=>new ScheduleResource($this->schedules),
            ];  
                */
        });
    }
}