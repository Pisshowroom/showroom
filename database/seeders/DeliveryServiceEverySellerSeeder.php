<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryServiceEverySellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('is_seller', true)
            ->where('seller_delivery_service', null)
            ->update(['seller_delivery_service' => 'jne:jnt:sicepat:anteraja']);
    }
}
