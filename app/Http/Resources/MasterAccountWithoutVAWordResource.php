<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MasterAccountWithoutVAWordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);
        
        $data['name_new'] = str_replace("Virtual Account", '', $this->name);
        $data['image'] = lypsisAsset($this->image);
        
        return $data;
    }
}
