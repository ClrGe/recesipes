<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Recipe;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes\Quantity>
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

        $recipes = Recipe::all();

        $units = ['g', "Kg", 'mL', 'cL', 'L' , 'Cuillère à café', 'Cuillère à soupe','unité', 'Tasse', 'Tranches'];

        return[
            "quantity" => $this->faker->numberBetween(1, 500),
            "unit" => $this->faker->randomElement($units),
            "ingredient_id" => $this->faker->randomElement($ingredients)->id,
            "recipe_id" => $this->faker->randomElement($recipes)->id,
        ];
    }
}
