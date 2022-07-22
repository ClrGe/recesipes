<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;

use App\Models\Recipes\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);

    }

    public function view(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        return view('category', ['category' => $category]);
    }

}
