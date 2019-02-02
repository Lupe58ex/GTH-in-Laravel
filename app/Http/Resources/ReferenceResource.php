<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReferenceResource extends JsonResource
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
            'lastname_father'=>$this->lastname_father,
            'lastname_mother'=>$this->lastname_mother,
            'name'=>$this->name,
            'role'=>$this->role,
            'phone_number'=>$this->phone_number,
            'business'=>$this->business,
            'commet'=>$this->commet,
        ];
    }
}
