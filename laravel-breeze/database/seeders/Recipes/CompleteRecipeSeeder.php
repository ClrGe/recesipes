<?php

namespace Database\Seeders\Recipes;

use Database\Seeders\Users\LikesSeeder;
use Illuminate\Database\Seeder;

class CompleteRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CategorySeeder::class,
            IngredientSeeder::class,
            RecipeSeeder::class,
            QuantitySeeder::class,
            MediaSeeder::class,
            EvaluationSeeder::class,
            LikesSeeder::class]);
    }


}
