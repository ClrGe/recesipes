<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => rand(1,3),
            'ingredients_id' => rand(1,15),
            'detail_id' => rand(1,1000),
            'description' => $this->faker->text(),
            'steps' => $this->faker->text(),
            'media_id' => rand(1,50),
        ];
    }
}
