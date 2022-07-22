<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Permission::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return Response::json($permission);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        Schema::disableForeignKeyConstraints();
        $permission->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }
}
