<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users\Users\Users\Users\Recipes\Quantity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Quantity::all());
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
     * @param  \App\Models\Users\Users\Users\Users\Recipes\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function show(Quantity $quantity)
    {
        return Response::json($quantity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users\Users\Users\Users\Recipes\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quantity $quantity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users\Users\Users\Users\Recipes\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity)
    {
        //
    }
}
