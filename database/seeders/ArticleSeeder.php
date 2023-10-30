<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            ['title' => '10 Tips for Better Sleep', 'image' => 'sleep.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
            ['title' => 'How to Make the Perfect Cup of Coffee', 'image' => 'coffee.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
            ['title' => 'The Benefits of Yoga for Stress Relief', 'image' => 'yoga.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
            ['title' => 'Healthy Eating Habits for a Better Life', 'image' => 'food.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
            ['title' => 'How to Stay Motivated When Working from Home', 'image' => 'work.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
            ['title' => 'The Importance of Regular Exercise', 'image' => 'exercise.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
            ['title' => 'Tips for a Successful Job Interview', 'image' => 'interview.jpg', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, velit vel bibendum bibendum, elit elit bibendum elit, vel bibendum elit elit.'],
        ];

        DB::table('articles')->insert($articles);
    }
}
