<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimestampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dates = [];
        for ($i = 0; $i < 20; $i++) {
            $dates[] = Carbon::create(2023, 9, 1)->addSeconds(rand(0, 5184000));
        }

        // For the Product model
        Product::chunk(100, function ($products) use ($dates) {
            foreach ($products as $product) {
                $product->created_at = $dates[array_rand($dates)];
                $product->updated_at = $dates[array_rand($dates)];
                $product->save();
            }
        });

        // For the Article model
        Article::chunk(100, function ($articles) use ($dates) {
            foreach ($articles as $article) {
                $article->created_at = $dates[array_rand($dates)];
                $article->updated_at = $dates[array_rand($dates)];
                $article->save();
            }
        });
        Admin::chunk(100, function ($articles) use ($dates) {
            foreach ($articles as $article) {
                $article->created_at = $dates[array_rand($dates)];
                $article->updated_at = $dates[array_rand($dates)];
                $article->save();
            }
        });
        User::chunk(100, function ($articles) use ($dates) {
            foreach ($articles as $article) {
                $article->created_at = $dates[array_rand($dates)];
                $article->updated_at = $dates[array_rand($dates)];
                $article->save();
            }
        });
    }
}
