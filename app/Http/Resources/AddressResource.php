<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'ro_province_id' => $this->ro_province_id,
            'ro_city_id' => $this->ro_city_id,
            'ro_subdistrict_id' => $this->ro_subdistrict_id,
            'street' => $this->street,
            'main' => $this->main,
            'place_name' => $this->place_name,
            'person_name' => $this->person_name,
            'phone_number' => $this->phone_number,
            'village' => $this->village,
            'district' => $this->district,
            'city' => $this->city,
            'ro_city' => $this->whenLoaded('ro_city', function () {
                return $this->ro_city;
            }),
            'address_text' => $this->address_text,
            'address_description' => $this->address_description,
            'lat' => $this->lat,
            'long' => $this->long,
        ];
    }
}
