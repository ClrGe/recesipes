<?php

namespace Database\Factories\Recipes;

use App\Models\Recipes\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['Entrée', 'Plat', 'Dessert'];
        $subType1 = ['Froid', 'Chaud', 'Viande', 'Poisson', 'Vegan'];
        $subType2 =['Soupe', 'Fruit de mer', 'test'];
        return [
            "type" =>$type[$this->faker->numberBetween(0, count($type)-1)],
            "subType1" => $subType1[$this->faker->numberBetween(0, count($subType1)-1)],
            "subType2" => $subType2[$this->faker->numberBetween(0, count($subType2)-1)],
        ];
    }
}
