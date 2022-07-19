<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Recipe;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = \App\Models\Ingredient::all();
        $categories = \App\Models\Category::all();

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

//            dd($path);
        }
        else {
            $recipe->image = 'recesipes/storage/app/public/images/default.jpg';
            $recipe->save();

//            dd('no image');
        }

        dd($recipe);
//        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe, Media $media)
    {
        $recipe = Recipe::find($recipe->id);
        $media = Media::where('recipe_id', $recipe->id)->get();

//        dd($media);
        return view('recipes.show', compact('recipe', 'media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
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
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
}
