<?php

namespace App\Http\Controllers;

class ShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopping');
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
     * @param  \App\Http\Requests\StorePermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShoppingListRequest $request)
    {
        //
    }

    /**
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingList $shoppingList)
    {
        //
    }

    /**
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingList $shoppingList)
    {
        //
    }

    /**
     * @param \App\Http\Requests\UpdateShoppingListRequest $request
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShoppingListRequest $request, ShoppingList $shoppingList)
    {
        //
    }

    /**
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingList $shoppingList)
    {
        //
    }
}
