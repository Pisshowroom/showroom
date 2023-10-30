<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Elektronik', 'image' => 'electronics.jpg'],
            ['name' => 'Pakaian', 'image' => 'clothing.jpg'],
            ['name' => 'Rumah', 'image' => 'home.jpg'],
            ['name' => 'Olahraga', 'image' => 'sports.jpg'],
            ['name' => 'Mainan', 'image' => 'toys.jpg'],
            ['name' => 'Buku', 'image' => 'books.jpg'],
            ['name' => 'Kecantikan', 'image' => 'beauty.jpg'],
            ['name' => 'Makanan', 'image' => 'food.jpg'],
        ];

        DB::table('categories')->insert($categories);
    }
}
