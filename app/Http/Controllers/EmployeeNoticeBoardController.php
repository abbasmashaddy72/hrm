<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeNoticeBoardRequest;
use App\Http\Requests\UpdateEmployeeNoticeBoardRequest;
use App\Models\EmployeeNoticeBoard;

class EmployeeNoticeBoardController extends Controller
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
     * @param  \App\Http\Requests\StoreEmployeeNoticeBoardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeNoticeBoardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeNoticeBoard  $employeeNoticeBoard
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeNoticeBoard $employeeNoticeBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeNoticeBoard  $employeeNoticeBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeNoticeBoard $employeeNoticeBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeNoticeBoardRequest  $request
     * @param  \App\Models\EmployeeNoticeBoard  $employeeNoticeBoard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeNoticeBoardRequest $request, EmployeeNoticeBoard $employeeNoticeBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeNoticeBoard  $employeeNoticeBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeNoticeBoard $employeeNoticeBoard)
    {
        //
    }
}
