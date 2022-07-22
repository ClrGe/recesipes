<?php

namespace Database\Seeders\Recipes;

use App\Models\ShoppingList;
use Database\Seeders\ShoppingListSeeder;
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
            StepSeeder::class,
            QuantitySeeder::class,
            MediaSeeder::class,
            EvaluationSeeder::class,
            LikesSeeder::class,
            ShoppingListSeeder::class,
        ]);
    }


}
