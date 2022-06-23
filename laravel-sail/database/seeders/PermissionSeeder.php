<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('permissions')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

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
