<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "photo"=>$this->doc_image,
            "name"=>$this->name,
            "email"=>$this->email,
            "department"=>$this->department,
            "phone"=>$this->phone,
            "days"=>$this->days,
            "time"=>$this->time,
            "Consultancy fees"=>$this->Consultancyfees

        ];
    }
}
