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
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->string("alt");
            $table->string("path");

            $table->unsignedBigInteger("recipe_id");
            $table->foreign("recipe_id")->references("id")->on("recipes");

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
<<<<<<<< HEAD:laravel-breeze/database/migrations/2022_06_11_173818_create_media_table.php
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('media');
        Schema::enableForeignKeyConstraints();
========
        Schema::dropIfExists('media');
>>>>>>>> origin/noah:laravel-breeze/database/migrations/2022_07_14_175451_create_media_table.php
    }
};
