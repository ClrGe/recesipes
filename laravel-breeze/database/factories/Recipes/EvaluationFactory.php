<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Users\User;
use App\Models\Recipes\Recipe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $recipes = Recipe::all();

        $users = User::all();
        return [
            'recipe_id' => $recipes->random()->id,
            'user_id' => $users->random()->id,

            "rating" => $this->faker->numberBetween(1, 5),

            "comment" => $this->faker->text(),

            "date" => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
