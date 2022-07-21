<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users\Like;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $likeToAdd = [];
        $likeToAdd["user_id"] = $request["userID"];
        $likeToAdd["recipe_id"] = $request["recipeID"];
        Like::create($likeToAdd);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        Schema::disableForeignKeyConstraints();
        $like->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }
}
