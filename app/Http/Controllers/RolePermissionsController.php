<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRolePermissionsRequest;
use App\Http\Requests\UpdateRolePermissionsRequest;
use App\Models\RolePermissions;

class RolePermissionsController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Role Permissions');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.role_permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.role_permissions.ces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRolePermissionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolePermissionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RolePermissions  $rolePermissions
     * @return \Illuminate\Http\Response
     */
    public function show(RolePermissions $rolePermissions)
    {
        return view('pages.role_permissions.ces');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolePermissions  $rolePermissions
     * @return \Illuminate\Http\Response
     */
    public function edit(RolePermissions $rolePermissions)
    {
        return view('pages.role_permissions.ces');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolePermissionsRequest  $request
     * @param  \App\Models\RolePermissions  $rolePermissions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolePermissionsRequest $request, RolePermissions $rolePermissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolePermissions  $rolePermissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolePermissions $rolePermissions)
    {
        //
    }
}
