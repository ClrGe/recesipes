<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'recipe_id' => $this->faker->numberBetween(1, 10),

            'step' => $this->faker->text(),
        ];
    }
}
