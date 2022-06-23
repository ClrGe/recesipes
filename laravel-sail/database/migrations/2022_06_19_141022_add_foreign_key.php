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
        Schema::table('users', function (Blueprint $table){
            $table->bigInteger('role_id')->unsigned()->nullable()->change();
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::table('recipes', function (Blueprint $table){
            $table->bigInteger('detail_id')->unsigned()->nullable()->change();
            $table->foreign('detail_id')->references('id')->on('recipe_details');
            $table->bigInteger('quantities_id')->unsigned()->nullable()->change();
            $table->foreign('quantities_id')->references('id')->on('quantities');
            $table->bigInteger('category_id')->unsigned()->nullable()->change();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->bigInteger('media_id')->unsigned()->nullable()->change();
            $table->foreign('media_id')->references('id')->on('media');
        });

        Schema::table('evaluations', function (Blueprint $table){
            $table->bigInteger('user_id')->unsigned()->nullable()->change();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('recipe_id')->unsigned()->nullable()->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('publications', function (Blueprint $table){
            $table->bigInteger('user_id')->unsigned()->nullable()->change();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('recipe_id')->unsigned()->nullable()->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('likes', function (Blueprint $table){
            $table->bigInteger('user_id')->unsigned()->nullable()->change();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('recipe_id')->unsigned()->nullable()->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('quantities', function (Blueprint $table){
            $table->bigInteger('ingredient_id')->unsigned()->nullable()->change();
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });

        Schema::table('roles', function (Blueprint $table){
            $table->bigInteger('permissions_id')->unsigned()->nullable()->change();
            $table->foreign('permissions_id')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
