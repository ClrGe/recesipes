<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Like as ModelsLike;
use App\Models\Users\Like;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

class LikeController extends Controller
{
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
