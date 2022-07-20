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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("description")->nullable();

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
<<<<<<<< HEAD:laravel-breeze/database/migrations/2022_06_23_071236_create_shopping_lists_table.php
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('shopping_lists');
        Schema::enableForeignKeyConstraints();
========
        Schema::dropIfExists('categories');
>>>>>>>> origin/noah:laravel-breeze/database/migrations/2022_07_14_175440_create_categories_table.php
    }
};
