<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Evaluation;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Quantity;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Step;
use App\Models\Users\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $recipe = Recipe::find($recipe->id);

        if($recipe->user_id == null)
        {
            $user = null;
        }
        else
        {
            $user = User::where('id', $recipe->user_id)->first();
        }

        $ingredients = [];
        $quantities = Quantity::all()->where('recipe_id', $recipe->id);

        foreach($quantities as $quantity){
            $ingredient = Ingredient::where('id', $quantity->ingredient_id)->first();
            $ingredients[] = $ingredient;
        }

        $ingredients = Quantity::all()->where('recipe_id', $recipe->id);

        $steps = Step::all()->where('recipe_id', $recipe->id);

        $evaluations = Evaluation::all()->where('recipe_id', $recipe->id);

        return view('recipes.show', compact('recipe', 'ingredients', 'quantities', 'user', 'steps', 'evaluations'));
    }

    public function random()
    {
        $recipe = Recipe::inRandomOrder()->first();

        if($recipe->user_id == null)
        {
            $user = null;
        }
        else
        {
            $user = User::where('id', $recipe->user_id)->first();
        }

        $quantities = Quantity::all()->where('recipe_id', $recipe->id);
        $ingredients = [];

        foreach($quantities as $quantity){
            $ingredient = Ingredient::where('id', $quantity->ingredient_id)->first();
            $ingredients[] = $ingredient;
        }

        $steps = Step::all()->where('recipe_id', $recipe->id);

        $evaluations = Evaluation::all()->where('recipe_id', $recipe->id);

        return view('recipes.show', compact('recipe', 'user', 'ingredients', 'steps', 'quantities', 'evaluations'));
    }

    public function manyrandom()
    {
        $recipes = Recipe::all();
        return view('welcome', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $recipeID = (Recipe::all()->last()->id)+1;
//        DB::insert("INSERT INTO recipes (`id`) VALUES ($recipeID)");
//        return view('Recipes/recipeCreation');

        $ingredients = \App\Models\Recipes\Ingredient::all();
        $categories = \App\Models\Recipes\Category::all();

        return view('recipes.create', compact('ingredients', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = auth()->user()->recipes()->create($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
//            Image::make($image)->resize(300, 300)->save(public_path('/images/' . $imageName));
            $image->move(public_path('images'), $imageName);
            $path = '/images/' . $imageName;
            $recipe->image = $path;
            $recipe->save();

//            dd($path);
        }
        else {
            $recipe->image = '/images/default.jpg';
            $recipe->save();

//            dd('no image');
        }

        $ingredients = $request->input('ingredients');

//        dd($ingredients);

        foreach($ingredients as $ingredient) {
//            if there is quantity
            if(isset($ingredient['quantity'])) {
                $quantity = new Quantity();
                $quantity->recipe_id = $recipe->id;
                $quantity->ingredient_id = $ingredient['id'];
                $quantity->quantity = $ingredient['quantity'];
                $quantity->save();
            }
        }

        $steps = $request->input('steps');
        foreach($steps as $step) {
            $stepCreate = new Step();
            $stepCreate->recipe_id = $recipe->id;
            $stepCreate->step = $step;
            $stepCreate->save();
        }

        return redirect()->route('recipes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipes\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipes\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index')->with('status', 'Recette supprimée');
    }

}
