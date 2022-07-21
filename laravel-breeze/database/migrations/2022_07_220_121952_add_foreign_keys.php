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

        Schema::table('evaluations', function (Blueprint $table){
            $table->bigInteger('user_id')->unsigned()->nullable()->change();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('recipe_id')->unsigned()->nullable()->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('quantities', function (Blueprint $table){
            $table->bigInteger('ingredient_id')->unsigned()->nullable()->change();
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->bigInteger('recipe_id')->unsigned()->nullable()->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('roles', function (Blueprint $table){
            $table->bigInteger('permissions_id')->unsigned()->nullable()->change();
            $table->foreign('permissions_id')->references('id')->on('permissions');
        });

        Schema::table('recipes', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id")->nullable()->change();
            $table->foreign("user_id")->references("id")->on("users");

            $table->unsignedBigInteger("category_id")->nullable()->change();
            $table->foreign("category_id")->references("id")->on("categories");
        });

        Schema::table('media', function (Blueprint $table) {
            $table->unsignedBigInteger("recipe_id")->change();
            $table->foreign("recipe_id")->references("id")->on("recipes");

        });

        Schema::table('steps', function (Blueprint $table) {
            $table->unsignedBigInteger('recipe_id')->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('shopping_list', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->change();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('recipe_id')->unsigned()->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->change();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('recipe_id')->change();
            $table->foreign('recipe_id')->references('id')->on('recipes');

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
