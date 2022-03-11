<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Response;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreSiteInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param SiteInfo $siteInfo
     *
     * @return Response
     */
    public function show(SiteInfo $siteInfo)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SiteInfo $siteInfo
     *
     * @return Response
     */
    public function edit(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteInfo  $siteInfo
     *
     * @return Response
     */
    public function update(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  SiteInfo  $siteInfo
     *
     * @return Response
     */
    public function destroy(SiteInfo $siteInfo)
    {
        //
    }
}
