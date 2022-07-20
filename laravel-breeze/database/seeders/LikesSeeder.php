<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipes\Recipe;
use App\Models\Users\User;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('likes')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $recipes = Recipe::all();
        $recipe1 = $recipes->first()->id;
        $recipe2 = $recipes->last()->id;

        $users = User::all();
        $user1 = $users->first()->id;
        $user2 = $users->last()->id;

        for($i = 0; $i<20; $i++){
            DB::table("likes")->insert([
                "user_id" => rand($user1, $user2),
                "recipe_id" => rand($recipe1, $recipe2),
            ]);
        }


    }
}
