<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('media')->delete();
        Schema::enableForeignKeyConstraints();

        Media::factory(10)->create();
    }

}
