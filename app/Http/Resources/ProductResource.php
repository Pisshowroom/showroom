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
            // how to handling images that  casted into array ?
            'images' => $imagesData,
            'unit' => $this->unit,
            'is_featured' => $this->is_featured,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'parent' => new self($this->whenLoaded('parent'))
        ];
    }
}
