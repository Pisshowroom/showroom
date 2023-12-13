<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->where('id', '<=', 10)->get();

        foreach ($users as $user) {
            for ($i = 1; $i <= 3; $i++) {
                DB::table('notifications')->insert([
                    'user_id' => $user->id,
                    'title' => 'Dummy Title',
                    'subtitle' => 'Dummy Subtitle',
                    'content' => '<p>Dummy HTML Content</p>',
                    'read' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
