<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Quantity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Quantity::all());
    }


    /**
     * Display the specified resource.
     *
     * @param Quantity $quantity
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function show(Quantity $quantity)
    {
        return Response::json($quantity);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity)
    {
        Schema::disableForeignKeyConstraints();
        $quantity->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }
}
