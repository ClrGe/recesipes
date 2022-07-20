<?php

namespace Database\Seeders\Users;

use App\Models\Users\Like;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        Like::factory(20)->create();
    }
}
