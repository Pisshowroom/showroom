<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // user where device id = 789012
        $seller = User::where('device_id', '789012')->first();

        $products = [
            ['name' => 'Laptop ASUS ROG', 'slug' => 'laptop-asus-rog', 'image' => 'laptop-asus-rog.jpg', 'category_id' => 1, 'price' => 20000000, 'stock' => 10, 'unit' => 'unit', 'description' => 'Powerful gaming laptop with NVIDIA graphics card', 'is_featured' => true, 'seller_id' => $seller->id],
            ['name' => 'Smartphone Samsung Galaxy S21', 'slug' => 'smartphone-samsung-galaxy-s21', 'image' => 'smartphone-samsung-galaxy-s21.jpg', 'category_id' => 1, 'price' => 12000000, 'stock' => 20, 'unit' => 'unit', 'description' => 'Flagship smartphone with 5G support', 'is_featured' => true, 'seller_id' => $seller->id],
            ['name' => 'T-Shirt Adidas', 'slug' => 't-shirt-adidas', 'image' => 't-shirt-adidas.jpg', 'category_id' => 2, 'price' => 200000, 'stock' => 50, 'unit' => 'piece', 'description' => 'Comfortable and stylish T-Shirt from Adidas', 'is_featured' => false, 'seller_id' => $seller->id],
            ['name' => 'Jeans Levis', 'slug' => 'jeans-levis', 'image' => 'jeans-levis.jpg', 'category_id' => 2, 'price' => 500000, 'stock' => 30, 'unit' => 'piece', 'description' => 'Classic jeans from Levi\'s', 'is_featured' => false, 'seller_id' => $seller->id],
            ['name' => 'Sofa Minimalis', 'slug' => 'sofa-minimalis', 'image' => 'sofa-minimalis.jpg', 'category_id' => 3, 'price' => 5000000, 'stock' => 5, 'unit' => 'set', 'description' => 'Minimalist sofa with comfortable cushions', 'is_featured' => true, 'seller_id' => $seller->id],
            ['name' => 'Meja Makan Kayu Jati', 'slug' => 'meja-makan-kayu-jati', 'image' => 'meja-makan-kayu-jati.jpg', 'category_id' => 3, 'price' => 8000000, 'stock' => 3, 'unit' => 'set', 'description' => 'Solid teak wood dining table with 6 chairs', 'is_featured' => false, 'seller_id' => $seller->id],
            ['name' => 'Sepeda Gunung Polygon', 'slug' => 'sepeda-gunung-polygon', 'image' => 'sepeda-gunung-polygon.jpg', 'category_id' => 4, 'price' => 6000000, 'stock' => 8, 'unit' => 'unit', 'description' => 'Mountain bike with Shimano gears and hydraulic brakes', 'is_featured' => true, 'seller_id' => $seller->id],
            ['name' => 'Bola Basket Spalding', 'slug' => 'bola-basket-spalding', 'image' => 'bola-basket-spalding.jpg', 'category_id' => 4, 'price' => 500000, 'stock' => 20, 'unit' => 'piece', 'description' => 'Official NBA basketball from Spalding', 'is_featured' => false, 'seller_id' => $seller->id],
        ];

        $products2[] = ['name' => 'Hitam', 'slug' => 'bola-basket-spalding-hitam', 'image' => 'bola-basket-spalding-red.jpg', 'category_id' => 4, 'price' => 600000, 'stock' => 5, 'unit' => 'piece', 'description' => 'Official NBA basketball from Spalding in red color', 'is_featured' => false, 'parent_id' => 8, 'seller_id' => $seller->id];
        $products2[] = ['name' => 'Coklat', 'slug' => 'bola-basket-spalding-coklat', 'image' => 'bola-basket-spalding-blue.jpg', 'category_id' => 4, 'price' => 606000, 'stock' => 5, 'unit' => 'piece', 'description' => 'Official NBA basketball from Spalding in blue color', 'is_featured' => false, 'parent_id' => 8, 'seller_id' => $seller->id];

        // dd($products);
        Product::insert($products);
        Product::insert($products2);
    }
}

