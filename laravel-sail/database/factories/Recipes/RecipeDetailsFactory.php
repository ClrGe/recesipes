<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipeDetails>
 */
class RecipeDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $priceRange = ['Economique', 'Moyen', 'Luxe'];
        $difficulty = ['Facile', 'Moyen', 'Difficile'];

        return [
            "cook_duration" => rand(1, 90),
            "preparation_duration" => rand(1, 60),
            "resting_duration" => rand(1, 300),
            "likes_total" => rand(0, 2000),
            "people_number" => rand(1,69),
            "price_range" => $priceRange[rand(0,2)],
            "difficulty" => $difficulty[rand(0,2)]
        ];
    }
}
