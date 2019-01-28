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
            'house_via'=>$this->house_via,
            'house_address'=>$this->house_address,
            'job_via'=>$this->job_via,
            'job_address'=>$this->job_address,
            'place_job'=>$this->place_job,
            'DNI'=>$this->DNI,
            'full_age'=>$this->full_age,
            'address_image'=>$this->address_image,
            'student'=>$this->student,
            'reference'=>$this->reference,
        ];
    }
}
