<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeTrainingRequest;
use App\Http\Requests\UpdateEmployeeTrainingRequest;
use App\Models\EmployeeTraining;

class EmployeeTrainingController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Employee Training');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.employee_training.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.employee_training.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeTrainingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeTrainingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeTraining  $employeeTraining
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeTraining $employeeTraining)
    {
        $employeeTraining = $employeeTraining->id;

        return view('pages.employee_training.show', compact('employeeTraining'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeTraining  $employeeTraining
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeTraining $employeeTraining)
    {
        $employeeTraining = $employeeTraining->id;

        return view('pages.employee_training.edit', compact('employeeTraining'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeTrainingRequest  $request
     * @param  \App\Models\EmployeeTraining  $employeeTraining
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeTrainingRequest $request, EmployeeTraining $employeeTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeTraining  $employeeTraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeTraining $employeeTraining)
    {
        //
    }
}
