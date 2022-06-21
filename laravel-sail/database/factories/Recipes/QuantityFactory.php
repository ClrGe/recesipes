<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipes\Ingredient;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quantity>
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

        return [
            "quantity" => rand(1, 500),
            "ingredient_id" => rand($ingredient1, $ingredient2),
        ];
    }
}
