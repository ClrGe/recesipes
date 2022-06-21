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

        $quantities = Quantity::all();
        $quantity1 = $quantities->first()->id;
        $quantity2 = $quantities->last()->id;

        $details = RecipeDetails::all();
        $detail1 = $details->first()->id;
        $detail2 = $details->last()->id;

        $medias = Media::all();
        $media1 = $medias->first()->id;
        $media2 = $medias->last()->id;

        return [
            'name' => $this->faker->word(),
            'category_id' => rand($category1,$category2),
            'quantities_id' => rand($quantity1,$quantity2),
            'detail_id' => rand($detail1,$detail2),
            'description' => $this->faker->text(),
            'steps' => $this->faker->text(),
            'media_id' => rand($media1,$media2),
        ];
    }
}
