<?php

namespace Database\Factories\Users;

use App\Models\Recipes\Recipe;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory
 */
class LikeFactory extends Factory
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

        return[
            "user_id" => $this->faker->numberBetween($user1, $user2),
            "recipe_id" => $this->faker->numberBetween($recipe1, $recipe2),
        ];
    }
}
