<?php

namespace Database\Factories\Users;

use App\Models\Users\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = ["Administrator", "Editeur", "Utilisateur"];
        $permAdmin = Permission::all()->firstwhere('all','=' ,1);
        $permEditor = Permission::all()->where('all', '=', 0)->where('self_editing', '=', 1)->first();
        $permUser = Permission::all()->firstwhere('self_editing', '=', 0);


        return [
            "title" => $title[$this->faker->numberBetween(0, count($title)-1)],
            "permissions_id" => $permAdmin->id,
            //TODO

        ];
    }
}
