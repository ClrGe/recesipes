<?php

namespace Database\Factories\Recipes;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Users\User;
use App\Models\Recipes\Recipe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
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
        $recipe1 = $recipes->first()->id;
        $recipe2 = $recipes->last()->id;

        $users = User::all();
        $user1 = $users->first()->id;
        $user2 = $users->last()->id;
        return [
            "user_id" => $this->faker->numberBetween($user1, $user2),
            "recipe_id" => $this->faker->numberBetween($recipe1, $recipe2),
            "rating" => $this->faker->numberBetween(0, 10),
            "comment" => $this->faker->text(),
            "date" => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
