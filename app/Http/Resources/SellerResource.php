<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
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
            'seller_name' => $this->seller_name,
            'seller_slug' => $this->seller_slug,
            'seller_image' => lypsisAsset($this->seller_image),
            'seller_description' => $this->seller_description,
        ];
        
    }
}
