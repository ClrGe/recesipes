<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return Response::json($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipes\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function search($subString)
    {
        $categoriesByType = Category::query()->where('type', 'LIKE', "%{$subString}%")->whereNull('subtype1')->get();
        $categoriesBySubtype1 = Category::query()->where('subtype1', 'LIKE', "%{$subString}%")->whereNull('subtype2')->get();
        $categoriesBySubtype2 = Category::query()->where('subtype2', 'LIKE', "%{$subString}%")->get();

        $categories1 = $categoriesByType->merge($categoriesBySubtype1);
        $categories = $categories1->merge($categoriesBySubtype2);

        return Response::json($categories);
    }
}
