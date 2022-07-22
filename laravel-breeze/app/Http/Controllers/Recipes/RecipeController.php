<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Mail\RecipeSendMail;
use App\Models\Recipes\Category;
use App\Models\Recipes\Evaluation;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Media;
use App\Models\Recipes\Quantity;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Steps;
use App\Models\Users\Like;
use App\Models\Users\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return Application|Factory|View|Response
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

        $users = User::all();

        $ingredients = [];

        $quantities = Quantity::all()->where('recipe_id', $recipe->id);

        foreach($quantities as $quantity){
            $ingredient = Ingredient::where('id', $quantity->ingredient_id)->first();
            $ingredients[] = $ingredient;
        }

        $ingredients = Quantity::all()->where('recipe_id', $recipe->id);

        $steps = Steps::all()->where('recipe_id', $recipe->id);

        $evaluations = Evaluation::all()->where('recipe_id', $recipe->id);



        return view('recipes.show', compact('users', 'recipe', 'ingredients', 'quantities', 'user', 'steps', 'evaluations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $recipe = new Recipe();

        $recipe->name = $request->name;
        $recipe->description = $request->description;

        $recipe->image = $request->image;

        $recipe->category_id = $request->category_id;
        $recipe->user_id = auth()->user()->id;

        $recipe->price_range = $request->price_range;
        $recipe->difficulty = $request->difficulty;

        $recipe->preparation_duration = $request->preparation_duration;
        $recipe->resting_duration = $request->resting_duration;
        $recipe->cook_duration = $request->cook_duration;


        $recipe->save();


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $path = '/images/' . $imageName;
            $recipe->image = $path;
            $recipe->save();
        }
        else {
            $recipe->image = '/images/default.jpg';
            $recipe->save();
        }

        $ingredients = $request->input('ingredients');


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
            $stepCreate = new Steps();
            $stepCreate->recipe_id = $recipe->id;
            $stepCreate->step = $step;
            $stepCreate->save();
        }

        return redirect()->route('recipes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        $recipe = Recipe::find($recipe->id);

        $ingredients = Ingredient::all();

        $categories = Category::all();

        $quantities = Quantity::all()->where('recipe_id', $recipe->id);

        $steps = Steps::all()->where('recipe_id', $recipe->id);

        return view('recipes.edit', compact('recipe', 'ingredients', 'categories', 'quantities', 'steps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {

        $recipe = Recipe::find($recipe->id);

        $recipe->name = $request->name;
        $recipe->description = $request->description;

        if ($request->image) {
            $recipe->image = $request->image;
        }

        if ($request->category_id != 0){
            $recipe->category_id = $request->category_id;
        }

        $recipe->user_id = auth()->user()->id;

        $recipe->guest_number = $request->guest_number;

        $recipe->price_range = $request->price_range;
        $recipe->difficulty = $request->difficulty;

        $recipe->preparation_duration = $request->preparation_duration;
        $recipe->resting_duration = $request->resting_duration;
        $recipe->cook_duration = $request->cook_duration;

        $recipe->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $path = '/images/' . $imageName;
            $recipe->image = $path;
            $recipe->save();
        }

        $quantities = Quantity::all()->where('recipe_id', $recipe->id);
        foreach($quantities as $quantity) {
            $quantity->delete();
        }


        $ingredients = $request->input('ingredients');

        if ($ingredients){
            foreach($ingredients as $ingredient) {
                if(isset($ingredient['quantity'])) {
                    $quantity = new Quantity();
                    $quantity->recipe_id = $recipe->id;
                    $quantity->ingredient_id = $ingredient['id'];
                    $quantity->quantity = $ingredient['quantity'];
                    $quantity->unit = $ingredient['unit'];
                    $quantity->save();
                }
            }
        }


        $steps_list = Steps::all()->where('recipe_id', $recipe->id);
        foreach($steps_list as $step) {
            $step->delete();
        }

        $steps = $request->input('steps');
        foreach($steps as $step) {
            $stepCreate = new Steps();
            $stepCreate->recipe_id = $recipe->id;
            $stepCreate->step = $step;
            $stepCreate->save();
        }
//
        return redirect()->route('recipes.show', $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        Schema::disableForeignKeyConstraints();
        $quantities = Quantity::all()->where('recipe_id', $recipe->id);
        foreach($quantities as $quantity) {
            $quantity->delete();
        }

        $steps = Steps::all()->where('recipe_id', $recipe->id);
        foreach($steps as $step) {
            $step->delete();
        }

        $evaluations = Evaluation::all()->where('recipe_id', $recipe->id);
        foreach($evaluations as $evaluation) {
            $evaluation->delete();
        }

        $likes = Like::all()->where('recipe_id', $recipe->id);
        foreach($likes as $like) {
            $like->delete();
        }

        $media = Media::all()->where('recipe_id', $recipe->id);
        foreach($media as $medium) {
            $medium->delete();
        }

        $recipe->delete();
        Schema::enableForeignKeyConstraints();

        return redirect()->route('recipes.index')->with('status', 'Recette supprimée');
    }

    public function random()
    {
        $recipe = Recipe::inRandomOrder()->first();
        return redirect()->route('recipes.show', ["recipe"=>$recipe]);
    }

    public function manyrandom()
    {
        $recipes = Recipe::all();
        return view('welcome', ['recipes' => $recipes]);
    }

    public function download(Recipe $recipe)
    {
        $stepsRecipe = Steps::where('recipe_id', $recipe->id)->get();
        $mediaRecipe = Media::where('recipe_id', $recipe->id)->first();

        $pdf = PDF::loadView('recipes.pdf', compact('recipe', 'mediaRecipe', 'stepsRecipe'));

        return $pdf->download(Str::slug($recipe->name).'.pdf');
    }

    public function getmail(Recipe $recipe)
    {
        $stepsRecipe = Steps::where('recipe_id', $recipe->id)->get();
        $mediaRecipe = Media::where('recipe_id', $recipe->id)->first();
        return view('recipes.mail', compact('recipe', 'mediaRecipe', 'stepsRecipe'));
    }

    public function sendMail(Request $request, Recipe $recipe)
    {
        $mailData = [
            'email'=>$request->email,
            'message'=>$request->message,
        ];

        Mail::to($mailData['email'])
            ->send(new RecipeSendMail($mailData, $recipe));

        return redirect()->route('recipes.show', $recipe)->with('status', 'Email send!');
    }

}
