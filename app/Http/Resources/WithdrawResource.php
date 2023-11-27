<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WithdrawResource extends JsonResource
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
            'master_account_id' => $this->master_account_id,
            'account_bank_name' => $this->account_bank_name,
            'account_bank_number' => $this->account_bank_number,
            'amount' => $this->amount,
            'description' => $this->description,
            'proof_payment' => lypsisAsset($this->proof_payment),
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => $this->whenLoaded('user', function () {
                return new MasterAccountResource($this->user);
            }),
            'master_account' => $this->whenLoaded('master_account', function () {
                return new MasterAccountResource($this->master_account);
            }),
        ];
    }
}
