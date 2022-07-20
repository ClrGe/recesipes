<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();

            $table->string("name");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:laravel-breeze/database/migrations/2022_06_11_172413_create_ingredients_table.php
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('ingredients');
        Schema::enableForeignKeyConstraints();
========
        Schema::dropIfExists('ingredients');
>>>>>>>> origin/noah:laravel-breeze/database/migrations/2022_07_14_175427_create_ingredients_table.php
    }
};
