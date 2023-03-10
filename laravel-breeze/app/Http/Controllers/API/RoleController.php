<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Role::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return Response::json($role);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        Schema::disableForeignKeyConstraints();
        $role->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }
}
