<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Users\Users\Users\Users\Recipes\Ingredient;
use App\Models\Users\Users\Users\Users\Recipes\Recipe;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users\Users\Users\Users\Quantity>
 */
class QuantityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ingredients = Ingredient::all();
        $ingredient1 = $ingredients->first()->id;
        $ingredient2 = $ingredients->last()->id;

        $recipes = Recipe::all();
        $recipe1 = $recipes->first()->id;
        $recipe2 = $recipes->last()->id;

        $units = ['g','Tranches','Cuillère à soupe','mL','unité','Cuillère à café','Tasse',];

        return[
            "quantity" => $this->faker->numberBetween(1, 500),
            "ingredient_id" => $this->faker->numberBetween($ingredient1, $ingredient2),
            "unit" => $units[$this->faker->numberBetween(0, count($units)-1)],
            "recipe_id" => $this->faker->numberBetween($recipe1, $recipe2),
        ];
    }
}
