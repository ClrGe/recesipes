<?php

namespace Database\Seeders;

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
        QuantitySeeder::CallSeeder();
        MediaSeeder::CallSeeder();
        RecipeDetailsSeeder::CallSeeder();
        RecipeSeeder::CallSeeder();
    }

    public static function CallSeeder()
    {
        $fullRecipeSeeder = new CompleteRecipeSeeder();
        $fullRecipeSeeder->run();
    }
}
