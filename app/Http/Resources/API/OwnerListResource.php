<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    // Add resources to your /api/owners routes so that they return: id, full_name, telephone_number (formatted if you completed the formattedPhoneNumber() challenge), full_address
        return [
            "id" => $this->id,
            "full_name" =>$this->fullName(),
            "telephone" => $this->telephone,
            "full_address" => $this->fullAddress()
        ];
    }
}
