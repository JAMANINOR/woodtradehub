<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 15; $i++) {
            News::create([
                'title' => $faker->sentence(5),
                'content' => $faker->paragraph(10),
                'category_id' => 1,
                'user_id' => 1,
                'image' => $faker->imageUrl(640, 480, 'cats', true, 'Plywood News'),
            ]);
        }
    }
}
