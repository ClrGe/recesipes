<?php

namespace App\Http\Controllers\Recipes;

use App\Models\Recipes\Quantity;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuantityRequest;
use App\Http\Requests\UpdateQuantityRequest;

class QuantityController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuantityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuantityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function show(Quantity $quantity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function edit(Quantity $quantity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuantityRequest  $request
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuantityRequest $request, Quantity $quantity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity)
    {
        //
    }
}
