<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $imagesData = [];
        foreach(($this->images ?? []) as $img) {
            $imagesData[] = lypsisAsset($img);
        }
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'discount' => $this->discount,
            'weight' => $this->weight,
            // how to handling images that  casted into array ?
            'images' => $imagesData,
            'unit' => $this->unit,
            'is_featured' => $this->is_featured,
            'category_id' => $this->category_id,
            'seller' => new UserResource($this->whenLoaded('seller')),
            'category' => new CategoryResource($this->whenLoaded('category')),
            'variants' => self::collection($this->whenLoaded('variants')),
            'parent' => new self($this->whenLoaded('parent')),
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews')),
        ];
    }
}
