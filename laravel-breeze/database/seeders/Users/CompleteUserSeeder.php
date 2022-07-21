<?php

namespace Database\Seeders\Users;

use Illuminate\Database\Seeder;

class CompleteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class]);
    }


}
