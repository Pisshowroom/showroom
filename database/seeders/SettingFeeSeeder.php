<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name' => 'commerce_balance',
                'value' => '1000000',
                'type' => 'number',
            ],
            [
                'name' => 'seller_fee_amount',
                'value' => '1000',
                'type' => 'number',
            ],
            [
                'name' => 'seller_fee_percent',
                'value' => '10',
                'type' => 'number',
            ],
            [
                'name' => 'buyer_fee_amount',
                'value' => '500',
                'type' => 'number',
            ],
            [
                'name' => 'buyer_fee_percent',
                'value' => '5',
                'type' => 'number',
            ],
        ];

        Setting::insert($settings);
    }
}
