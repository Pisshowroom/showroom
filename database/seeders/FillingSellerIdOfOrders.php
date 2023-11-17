<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FillingSellerIdOfOrders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::whereNull('seller_id')->update([
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
        ]);
    }
}
