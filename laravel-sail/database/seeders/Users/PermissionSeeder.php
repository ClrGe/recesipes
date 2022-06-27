<?php

namespace Database\Seeders\Users;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();        
        DB::table('permissions')->delete();
        Schema::enableForeignKeyConstraints();

        DB::table('permissions')->insert([
            'all' => true,
            'self_editing' => true,
            'review' => true,
        ]);

        DB::table('permissions')->insert([
            'all' => false,
            'self_editing' => true,
            'review' => true,
        ]);

        DB::table('permissions')->insert([
            'all' => false,
            'self_editing' => false,
            'review' => true,
        ]);
    }

    public static function CallSeeder()
    {
        $permissionSeeder = new PermissionSeeder();
        $permissionSeeder->run();
    }
}
