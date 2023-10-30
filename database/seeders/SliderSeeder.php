<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            ['description' => 'Get 20% off on all products', 'image' => 'slider1.jpg', 'active' => false],
            ['description' => 'New arrivals for the season', 'image' => 'slider2.jpg', 'active' => false],
            ['description' => 'Free shipping on orders over $50', 'image' => 'slider3.jpg', 'active' => false],
            ['description' => 'Limited time offer: Buy 1 get 1 free', 'image' => 'slider4.jpg', 'active' => false],
            ['description' => 'Summer sale: Up to 50% off on select items', 'image' => 'slider5.jpg', 'active' => false],
        ];

        DB::table('sliders')->insert($sliders);
    }
}
