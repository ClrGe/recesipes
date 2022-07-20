<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('recipe_id');
            $table->foreign('recipe_id')->references('id')->on('recipes');

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
<<<<<<<< HEAD:laravel-breeze/database/migrations/2022_06_15_195049_create_likes_table.php
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('likes');
        Schema::enableForeignKeyConstraints();
========
        Schema::dropIfExists('likes');
>>>>>>>> origin/noah:laravel-breeze/database/migrations/2022_07_16_093957_create_likes_table.php
    }
};
