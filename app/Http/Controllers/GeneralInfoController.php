<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneralInfoRequest;
use App\Http\Requests\UpdateGeneralInfoRequest;
use App\Models\GeneralInfo;

class GeneralInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreGeneralInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGeneralInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralInfo  $generalInfo
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralInfo $generalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralInfo  $generalInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralInfo $generalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGeneralInfoRequest  $request
     * @param  \App\Models\GeneralInfo  $generalInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeneralInfoRequest $request, GeneralInfo $generalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralInfo  $generalInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralInfo $generalInfo)
    {
        //
    }
}
