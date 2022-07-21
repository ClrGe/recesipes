<?php

namespace Database\Factories\Recipes;

use App\Models\Recipes\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory
 */
class MediaFactory extends Factory
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

        return [
            'alt' => $this->faker->word(),
            'path' => $this->faker->imageUrl(),
            "recipe_id" => $this->faker->numberBetween($recipe1, $recipe2),
        ];
    }
}
