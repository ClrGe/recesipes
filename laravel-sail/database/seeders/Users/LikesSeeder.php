<?php

namespace Database\Seeders\Users;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipes\Recipe;
use App\Models\Users\User;
use Illuminate\Support\Facades\Schema;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('likes')->delete();
        Schema::enableForeignKeyConstraints();

        \App\Models\Users\Like::factory(20)->create();
    }
}
