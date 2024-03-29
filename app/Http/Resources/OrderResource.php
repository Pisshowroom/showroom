<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $imagesComplainData = [];
        // dd($this->returning_images);
        foreach(($this->returning_images ?? []) as $img) {
            $imagesComplainData[] = lypsisAsset($img);
        }

        $data = [
            'id' => $this->id,
            'payment_identifier' => $this->payment_identifier,
            'user_id' => $this->user_id,
            'discount_product' => $this->discount_product,
            'payment_status' => $this->payment_status,
            'status' => $this->status,
            'address_id' => $this->address_id,
            'delivery_cost' => $this->delivery_cost,
            'service_fee' => $this->service_fee,
            'market_fee_buyer' => $this->market_fee_buyer,
            'delivery_receipt_number' => $this->delivery_receipt_number,
            'delivery_estimation_day' => $this->delivery_estimation_day,
            'delivery_service_code' => $this->delivery_service_code,
            'delivery_service_name' => $this->delivery_service_name,
            'delivery_service_kind' => $this->delivery_service_kind,
            'delivery_service_kind_description' => $this->delivery_service_kind_description,
            'subtotal' => $this->subtotal,
            'total' => $this->total,
            'total_final' => $this->total_final,
            'refund' => $this->refund,
            // 'master_account_id' => $this->master_account_id,
            // 'master_account' => new MasterAccountResource($this->whenLoaded('masterAccount')),
            'user' => $this->whenLoaded('user', function () {
                return new MasterAccountResource($this->user);
            }),
            'master_account' => $this->whenLoaded('master_account', function () {
                return new MasterAccountResource($this->master_account);
            }),
            'order_items' => $this->whenLoaded('order_items', function () {
                return  OrderItemResource::collection($this->order_items);
            }),
            'single_order_item_with_product' => $this->whenLoaded('single_order_item_with_product', function () {
                return  new OrderItemResource($this->single_order_item_with_product);
            }),
            'payment_channel' => $this->payment_channel,
            'link_label' => $this->link_label,
            'va_number' => $this->va_number,
            'qr_id' => $this->qr_id,
            'qr_string' => $this->qr_string,
            'outlet_payment_code' => $this->outlet_payment_code,
            'payment_due' => $this->payment_due,
            'packing_due' => $this->packing_due,
            'paid_at' => $this->paid_at,
            'note' => $this->note,
            'weight' => $this->weight,
            'is_reviewed' => $this->is_reviewed,
            'delivered_at' => $this->delivered_at,
            'arrived_at' => $this->arrived_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'returning_product_type' => $this->returning_product_type,
            'returning_reason' => $this->returning_reason,
            'returning_description' => $this->returning_description,
            'returning_images' => $imagesComplainData,
            'returning_video' => lypsisAsset($this->returning_video),
            'returning_delivery_service_receipt' => $this->returning_delivery_service_receipt,
            'returning_delivery_service_code' => $this->returning_delivery_service_code,
            'returning_delivery_service_name' => $this->returning_delivery_service_name,
            'refund_total' => $this->refund_total,
            'returning_data_due' => $this->returning_data_due,
            'returning_sending_due' => $this->returning_sending_due,
        ];

        if ($this->order_items_count) {
            $data['order_items_count'] = $this->order_items_count;
        }

        return $data;
    }
}
