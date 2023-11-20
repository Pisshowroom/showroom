<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $data = parent::toArray($request);
        // $data['sub_categories'] = $this->whenLoaded('sub_categories', function () {
        //     return new SubCategoryResource($this->sub_categories);
        // });
        
        // $data['image'] = lypsisAsset($this->image);
        
        // return $data;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => lypsisAsset($this->image),
            'sub_categories' => $this->whenLoaded('sub_categories', function () {
                return SubCategoryResource::collection($this->sub_categories);
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
