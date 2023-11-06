<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'uid' => $this->uid,
            'device_id' => $this->device_id,
            'image' => lypsisAsset($this->image),
            'birth_date' => $this->birth_date,
            'balance' => $this->balance,
            'is_seller' => $this->is_seller,
            'seller' => $this->when($this->seller, new SellerResource($this->seller)),
        ];
    }
}
