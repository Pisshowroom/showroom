<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillingSellerIdOfOrders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Order::whereNull('seller_id')->update([
            'seller_id' => function ($query) {
                $query->select('seller_id')
                    ->from('products')
                    ->whereIn('id', function ($query) {
                        $query->select('product_id')
                            ->from('order_items')
                            ->whereColumn('order_items.order_id', 'orders.id')
                            ->limit(1);
                    })
                    ->limit(1);
            },
        ]); */

        /* Order::whereNull('seller_id')->update([
            'seller_id' => DB::raw("(SELECT seller_id FROM products WHERE id IN (SELECT product_id FROM order_items WHERE order_items.order_id = orders.id) LIMIT 1)"),
        ]); */

        $orders = Order::whereNull('seller_id')->get();

        $result = $orders->map(function ($order) {
            $product = $order->order_items()->first()->product;

            return [
                'id_order' => $order->id,
                'id_product' => $product->id,
                'id_seller' => $product->seller_id,
            ];
        });

        foreach ($result as $item) {
            Order::where('id', $item['id_order'])->update(['seller_id' => $item['id_seller']]);
        }
    }
}
