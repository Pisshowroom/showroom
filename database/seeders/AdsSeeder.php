<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            if ($i < 4)
                $page = 'home';
            elseif ($i == 4)
                $page = 'detail_product';
            else
                $page = 'all_product';
            DB::table('ads')->insert([
                'page' => $page,
                'section' => 'Dummy Subtitle',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
