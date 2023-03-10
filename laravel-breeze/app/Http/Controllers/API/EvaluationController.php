<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Recipes\Evaluation;
use App\Models\Recipes\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Evaluation::all());
    }


    /**
     * Display the specified resource.
     *
     * @param Evaluation $evaluation
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        return Response::json($evaluation);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        Schema::disableForeignKeyConstraints();
        $evaluation->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }

    public function byRecipe(Recipe $recipe)
    {
        $evaluations = Evaluation::all()->where("recipe_id", "=", $recipe->id);
        return Response::json($evaluations);
    }
}
