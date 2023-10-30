<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            ['username' => 'admin1', 'password' => bcrypt('1234'), 'image' => 'admin1.jpg'],
            ['username' => 'admin2', 'password' => bcrypt('1234'), 'image' => 'admin2.jpg'],
            ['username' => 'admin3', 'password' => bcrypt('1234'), 'image' => 'admin3.jpg'],
            ['username' => 'admin4', 'password' => bcrypt('1234'), 'image' => 'admin4.jpg'],
            ['username' => 'admin5', 'password' => bcrypt('1234'), 'image' => 'admin5.jpg'],
        ];

        DB::table('admins')->insert($admins);
    }
}
