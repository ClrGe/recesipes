<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipes\Recipe;
use App\Models\Users\User;

/**
 * @extends Factory
 */
class ShoppingListFactory extends Factory
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
            "publish_date" => now(),
        ];
    }
}
