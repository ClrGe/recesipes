<?php

namespace Database\Factories\Recipes;

use App\Models\Recipes\Category;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes\Recipe>
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

        $users = User::all();
        $user1 = $users->first()->id;
        $user2 = $users->last()->id;

        $priceRange = ['Eco +', 'Moyen', 'PIB Suisse'];
        $difficulty = ['Facile', 'Moyen', 'Difficile'];

        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),

            'image' => $this->faker->imageUrl(200, 200, 'food'),

            "cook_duration" => $this->faker->numberBetween(1, 90),
            "preparation_duration" => $this->faker->numberBetween(1, 60),
            "resting_duration" => $this->faker->numberBetween(1, 300),

            "guest_number" => $this->faker->numberBetween(1,69),
            "price_range" => $priceRange[$this->faker->numberBetween(0,2)],

            "difficulty" => $difficulty[$this->faker->numberBetween(0,2)],


            'category_id' => $this->faker->numberBetween($category1,$category2),
            "user_id" => $this->faker->numberBetween($user1, $user2),

            "publish_time" => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
