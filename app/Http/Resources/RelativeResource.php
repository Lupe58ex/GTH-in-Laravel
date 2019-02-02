<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RelativeResource extends JsonResource
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
            'name'=>$this->name,
            'lastname_mother'=>$this->lastname_mother,
            'lastname_father'=>$this->lastname_father,
            'gender'=>$this->gender,
            'birthdate'=>$this->birthdate,
            'cellphone'=>$this->cellphone,
            'house_via_id'=>ViaResource::collection($this->house_via),
            'house_address'=>$this->house_address,
            'job_via_id'=>ViaResource::collection($this->job_via),
            'job_address'=>$this->job_address,
            'place_job'=>$this->place_job,
            'dni'=>$this->DNI,
            'full_age'=>$this->full_age,
            'address_file'=>$this->address_file,
            'is_student'=>$this->is_student,
            'reference'=>$this->reference,
        ];
    }
}
