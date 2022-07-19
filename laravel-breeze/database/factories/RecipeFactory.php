<?php

namespace Database\Factories;

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
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,

            'guest_number' => $this->faker->numberBetween(1, 10),

            'image' => $this->faker->imageUrl(),

            'preparation_duration' => $this->faker->numberBetween(1, 10),
            'resting_duration' => $this->faker->numberBetween(1, 10),
            'cook_duration' => $this->faker->numberBetween(1, 10),

            'price_range' => $this->faker->randomElement(['Eco +', 'Moyen', 'PIB Suisse']),
            'difficulty' => $this->faker->randomElement(['Facile', 'Moyen', 'Difficile']),

            'user_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
