<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Media;
use App\Models\Recipes\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Media::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        return Response::json($media);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        Schema::disableForeignKeyConstraints();
        $media->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }

    public function byRecipe(Recipe $recipe)
    {
        $medias = Media::all()->where("recipe_id", "=", $recipe->id);
        return Response::json($medias);
    }
}
