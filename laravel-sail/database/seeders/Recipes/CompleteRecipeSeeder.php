<?php

namespace Database\Seeders\Recipes;

use Database\Seeders\Users\LikesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        CategorySeeder::CallSeeder();
        IngredientSeeder::CallSeeder();
        RecipeSeeder::CallSeeder();
        QuantitySeeder::CallSeeder();
        MediaSeeder::CallSeeder();
        EvaluationSeeder::CallSeeder();
        LikesSeeder::CallSeeder();
    }

    public static function CallSeeder()
    {
        $fullRecipeSeeder = new CompleteRecipeSeeder();
        $fullRecipeSeeder->run();
    }
}
