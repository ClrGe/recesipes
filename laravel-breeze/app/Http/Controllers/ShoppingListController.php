<?php

namespace App\Http\Controllers\Users;

<<<<<<<< HEAD:laravel-breeze/app/Http/Controllers/Users/PermissionController.php
use App\Models\Users\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;

class PermissionController extends Controller
========
use App\Http\Requests\StoreShoppingListRequest;
use App\Http\Requests\UpdateShoppingListRequest;
use App\Models\ShoppingList;

class ShoppingListController extends Controller
>>>>>>>> breez/Maxime:laravel-breeze/app/Http/Controllers/ShoppingListController.php
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     *
<<<<<<<< HEAD:laravel-breeze/app/Http/Controllers/Users/PermissionController.php
     * @param  \App\Http\Requests\StorePermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
========
     * @param  \App\Http\Requests\StoreShoppingListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShoppingListRequest $request)
>>>>>>>> breez/Maxime:laravel-breeze/app/Http/Controllers/ShoppingListController.php
    {
        //
    }

    /**
     * Display the specified resource.
     *
<<<<<<<< HEAD:laravel-breeze/app/Http/Controllers/Users/PermissionController.php
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
========
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingList $shoppingList)
>>>>>>>> breez/Maxime:laravel-breeze/app/Http/Controllers/ShoppingListController.php
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<<< HEAD:laravel-breeze/app/Http/Controllers/Users/PermissionController.php
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
========
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingList $shoppingList)
>>>>>>>> breez/Maxime:laravel-breeze/app/Http/Controllers/ShoppingListController.php
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<<< HEAD:laravel-breeze/app/Http/Controllers/Users/PermissionController.php
     * @param  \App\Http\Requests\UpdatePermissionRequest  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
========
     * @param \App\Http\Requests\UpdateShoppingListRequest $request
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShoppingListRequest $request, ShoppingList $shoppingList)
>>>>>>>> breez/Maxime:laravel-breeze/app/Http/Controllers/ShoppingListController.php
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<<< HEAD:laravel-breeze/app/Http/Controllers/Users/PermissionController.php
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
========
     * @param ShoppingList $shoppingList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingList $shoppingList)
>>>>>>>> breez/Maxime:laravel-breeze/app/Http/Controllers/ShoppingListController.php
    {
        //
    }
}
