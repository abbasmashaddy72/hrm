<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeInventoryRequest;
use App\Http\Requests\UpdateEmployeeInventoryRequest;
use App\Models\EmployeeInventory;

class EmployeeInventoryController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Employee Inventory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.employee_inventory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.employee_inventory.ces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeInventoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeInventoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeInventory  $employeeInventory
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeInventory $employeeInventory)
    {
        return view('pages.employee_inventory.ces');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeInventory  $employeeInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeInventory $employeeInventory)
    {
        return view('pages.employee_inventory.ces');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeInventoryRequest  $request
     * @param  \App\Models\EmployeeInventory  $employeeInventory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeInventoryRequest $request, EmployeeInventory $employeeInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeInventory  $employeeInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeInventory $employeeInventory)
    {
        //
    }
}
