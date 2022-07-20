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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();

            $table->string("name")->nullable();
            $table->text("description")->nullable();

            $table->tinyInteger("guest_number")->default(2);

            $table->string("image")->nullable();

            $table->enum("price_range", ['Eco +', 'Moyen', 'PIB Suisse'])->nullable();
            $table->enum("difficulty", ['Facile', 'Moyen', 'Difficile'])->nullable();

            $table->smallInteger("preparation_duration")->nullable();
<<<<<<<< HEAD:laravel-breeze/database/migrations/2022_06_09_213419_create_recipes_table.php
            $table->bigInteger("user_id")->nullable();
========
            $table->smallInteger("resting_duration")->nullable();
            $table->smallInteger("cook_duration")->nullable();

>>>>>>>> origin/noah:laravel-breeze/database/migrations/2022_07_14_175450_create_recipes_table.php
            $table->timestamp("publish_time");

            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");

            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on("categories");

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
<<<<<<<< HEAD:laravel-breeze/database/migrations/2022_06_09_213419_create_recipes_table.php
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('recipes');
        Schema::enableForeignKeyConstraints();
========
        Schema::dropIfExists('recipes');
>>>>>>>> origin/noah:laravel-breeze/database/migrations/2022_07_14_175450_create_recipes_table.php
    }
};
