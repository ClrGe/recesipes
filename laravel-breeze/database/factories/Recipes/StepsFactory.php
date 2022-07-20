<?php

namespace Database\Factories\Recipes;


use App\Models\Recipes\Category;
use App\Models\Recipes\Recipe;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends
 */
class StepsFactory extends Factory
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

        return[
            "step" => $this->faker->text(),
            "recipe_id" => $this->faker->numberBetween($recipe1, $recipe2),
        ];
    }
}
