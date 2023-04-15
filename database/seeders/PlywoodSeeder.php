<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlywoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Birch', 'Maple', 'Oak', 'Cherry', 'Walnut', 'Mahogany', 'Pine', 'Fir', 'Cedar', 'Redwood', 'Poplar', 'Ash', 'Elm', 'Hickory'];

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 14; $i++) {
            $title = $faker->words(3, true);
            $photos = [$faker->imageUrl(), $faker->imageUrl(), $faker->imageUrl()];
            $description = $faker->text(200);
            $price = $faker->randomFloat(2, 10, 100);
            $size = $faker->randomElement(['4x8', '4x10', '5x10', '5x12']);
            $thickness = $faker->randomElement(['1/8"', '1/4"', '3/8"', '1/2"', '5/8"', '3/4"', '1"']);
            $category = $categories[$i % count($categories)];
            $tags = [$faker->word, $faker->word, $faker->word];
            $specifications = ['weight' => $faker->numberBetween(10, 50) . ' lbs', 'fire rating' => $faker->randomElement(['Class A', 'Class B', 'Class C'])];

            DB::table('products')->insert([
                'title' => $title,
                'photos' => json_encode($photos),
                'description' => $description,
                'price' => $price,
                'size' => $size,
                'thickness' => $thickness,
                'category' => $category,
                'tags' => json_encode($tags),
                'specifications' => json_encode($specifications)
            ]);
        }
    }
}
