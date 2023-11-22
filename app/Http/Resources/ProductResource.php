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
        foreach (($this->images ?? []) as $img) {
            $imagesData[] = lypsisAsset($img);
        }

        $discountPrice = null;
        if ($this->discount != null) {
            $discountPrice = $this->price - ($this->price * ($this->discount / 100));
        }

        // if ($this->abc != null) {
        //     dd($this->abc);
        // }


        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'price_discount' => $discountPrice,
            'stock' => $this->stock,
            'discount' => $this->discount,
            'weight' => $this->weight,
            'images' => $imagesData,
            'unit' => $this->unit,
            'parent_id' => $this->parent_id,
            'reviews_count' => $this->reviews_count ?? 0,
            'total_sell' => $this->total_sell ?? 0,
            'total_images' => $this->when(isset($this->total_images), $this->total_images),

            // 'rating' => $this->when(isset($this->reviews_avg_rating), doubleval($this->reviews_avg_rating)),
            'rating' => $this->reviews_avg_rating ? doubleval($this->reviews_avg_rating) : 0,
            'is_featured' => $this->is_featured,
            'category_id' => $this->category_id,
            'sub_category_id' => $this->sub_category_id,
            'seller_id' => $this->seller_id,
            // 'seller' => new UserResource($this->whenLoaded('seller')),
            // 'seller' => new SellerResource($this->whenLoaded('seller')),
            'seller' => $this->whenLoaded('seller', function () {
                return new SellerResource($this->seller);
            }),
            'category' => $this->whenLoaded('category', function () {
                return new CategoryResource($this->category);
            }),
            'sub_category' => $this->whenLoaded('sub_category', function () {
                return new SubCategoryResource($this->sub_category);
            }),
            'variants' => $this->whenLoaded('variants', function () {
                return self::collection($this->variants);
            }),
            'parent' => $this->whenLoaded('parent', function () {
                return new self($this->parent);
            }),
            'reviews' => $this->whenLoaded('reviews', function () {
                return ReviewResource::collection($this->reviews);
            }),

            /* 
            'variants' => self::collection($this->whenLoaded('variants')),
            'parent' => new self($this->whenLoaded('parent')),
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews')),
             */
        ];
    }
}
