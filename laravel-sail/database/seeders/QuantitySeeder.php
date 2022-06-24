<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Recipe;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table("quantities")->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $ingredients = Ingredient::all();
        $ingredient1 = $ingredients->first()->id;
        $ingredient2 = $ingredients->last()->id;

        $recipes = Recipe::all();
        $recipe1 = $recipes->first()->id;
        $recipe2 = $recipes->last()->id;

        $units = ['g','Tranches','Cuillère à soupe','mL','unité','Cuillère à café','Tasse',];

        for($i = 0; $i <20; $i++)
        {
            DB::table("quantities")->insert([
                "quantity" => rand(1, 500),
                "ingredient_id" => rand($ingredient1, $ingredient2),
                "unit" => $units[rand(0, count($units)-1)],
                "recipe_id" => rand($recipe1, $recipe2),
            ]);
        }
    }

    public static function CallSeeder()
    {
        $quantitySeeder = new QuantitySeeder();
        $quantitySeeder->run();
    }
}
