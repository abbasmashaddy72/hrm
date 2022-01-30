<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeAwardRequest;
use App\Http\Requests\UpdateEmployeeAwardRequest;
use App\Models\EmployeeAward;

class EmployeeAwardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Employee Award');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.employee_award.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.employee_award.ces');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeAwardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeAwardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeAward  $employeeAward
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeAward $employeeAward)
    {
        return view('pages.employee_award.ces');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeAward  $employeeAward
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeAward $employeeAward)
    {
        return view('pages.employee_award.ces');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeAwardRequest  $request
     * @param  \App\Models\EmployeeAward  $employeeAward
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeAwardRequest $request, EmployeeAward $employeeAward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeAward  $employeeAward
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeAward $employeeAward)
    {
        //
    }
}
