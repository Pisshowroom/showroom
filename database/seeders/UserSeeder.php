<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'johndoe@example.com', 'device_id' => '123456', 'api_token' => 'abc123', 'image' => 'johndoe.jpg', 'birth_date' => '1990-01-01', 'balance' => 100000, 'is_seller' => false, 'seller_slug' => null, 'seller_description' => null],
            ['name' => 'Jane Doe', 'email' => 'janedoe@example.com', 'device_id' => '654321', 'api_token' => 'def456', 'image' => 'janedoe.jpg', 'birth_date' => '1995-01-01', 'balance' => 50000, 'is_seller' => false, 'seller_slug' => null, 'seller_description' => null],
            ['name' => 'Bob Smith', 'email' => 'bobsmith@example.com', 'device_id' => '789012', 'api_token' => 'ghi789', 'image' => 'bobsmith.jpg', 'birth_date' => '1985-01-01', 'balance' => 0, 'is_seller' => true, 'seller_slug' => 'bobsmith', 'seller_description' => 'Online store selling electronics'],
        ];

        DB::table('users')->insert($users);
    }
}
