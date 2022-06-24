<?php

namespace Database\Factories\Recipes;

use App\Models\Recipes\Category;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Media;
use App\Models\Recipes\Quantity;
use App\Models\Recipes\RecipeDetails;
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
        $categories = Category::all();
        $category1 = $categories->first()->id;
        $category2 = $categories->last()->id;

        $priceRange = ['Economique', 'Moyen', 'Luxe'];
        $difficulty = ['Facile', 'Moyen', 'Difficile'];

        return [
            'name' => $this->faker->word(),
            'category_id' => rand($category1,$category2),
            'description' => $this->faker->text(),
            'steps' => $this->faker->text(),
            "cook_duration" => rand(1, 90),
            "preparation_duration" => rand(1, 60),
            "resting_duration" => rand(1, 300),
            "guest_number" => rand(1,69),
            "price_range" => $priceRange[rand(0,2)],
            "difficulty" => $difficulty[rand(0,2)]
        ];
    }
}
