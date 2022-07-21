<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Media;
use App\Models\Recipes\Quantity;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Steps;
use App\Models\Users\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

use Illuminate\Support\Facades\DB;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $recipeID = (Recipe::all()->last()->id)+1;
        DB::insert("INSERT INTO recipes (`id`) VALUES ($recipeID)");
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
        $this->validate($request, array(
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $recipe = auth()->user()->recipes()->create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'guest_number' => $request->guest_number,
            'price_range' => $request->price_range,
            'difficulty' => $request->difficulty,
            'preparation_duration' => $request->preparation_duration,
            'resting_duration' => $request->resting_duration,
            'cook_duration' => $request->cook_duration,
        ]);

        $recipe->ingredients()->attach($request->ingredients);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
//            Image::make($image)->resize(300, 300)->save(public_path('/images/' . $imageName));
            $image->move(public_path('images'), $imageName);
            $path = '/images/' . $imageName;
            $recipe->image = $path;
            $recipe->save();
        }
        else {
            $recipe->image = 'recesipes/storage/app/public/images/default.jpg';
            $recipe->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
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
        return view('recipes.show', ['recipe' => $recipe, 'ingredients' => $ingredients, 'quantities' => $quantities, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        $recipeID = (Recipe::all()->last()->id)+1;
        DB::insert("UPDATE recipes (`id`) SET ($recipeID)");
        return view('recipes.show', );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, array(
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $recipe = auth()->user()->recipes()->create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'guest_number' => $request->guest_number,
            'price_range' => $request->price_range,
            'difficulty' => $request->difficulty,
            'preparation_duration' => $request->preparation_duration,
            'resting_duration' => $request->resting_duration,
            'cook_duration' => $request->cook_duration,
        ]);

        $recipe->ingredients()->attach($request->ingredients);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
//            Image::make($image)->resize(300, 300)->save(public_path('/images/' . $imageName));
            $image->move(public_path('images'), $imageName);
            $path = '/images/' . $imageName;
            $recipe->image = $path;
            $recipe->save();
        }
        else {
            $recipe->image = 'recesipes/storage/app/public/images/default.jpg';
            $recipe->save();
        }
        return redirect()->route('recipes.show', ["recipe"=>$recipe]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

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

    public function download(Recipe $recipe, Media $media)
    {
        $stepsRecipe = Steps::where('recipe_id', $recipe->id)->get();
        $mediaRecipe = Media::where('recipe_id', $recipe->id)->first();

        $pdf = PDF::loadView('recipes.pdf', compact('recipe', 'mediaRecipe', 'stepsRecipe'));

        return $pdf->download(Str::slug($recipe->name).'.pdf');
    }
}
