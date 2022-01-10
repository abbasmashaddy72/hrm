<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobApplicantRequest;
use App\Http\Requests\UpdateJobApplicantRequest;
use App\Models\JobApplicant;

class JobApplicantController extends Controller
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
     * @param  \App\Http\Requests\StoreJobApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobApplicantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobApplicantRequest  $request
     * @param  \App\Models\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobApplicantRequest $request, JobApplicant $jobApplicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApplicant  $jobApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplicant $jobApplicant)
    {
        //
    }
}
