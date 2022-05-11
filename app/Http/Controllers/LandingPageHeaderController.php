<?php

namespace App\Http\Controllers;

use App\Models\LandingPageHeader;
use Illuminate\Http\Request;

class LandingPageHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/landingpageheader', [
            "title" => "Sangrid - landingpageheader",
            "creator" => "San"
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandingPageHeader  $landingPageHeader
     * @return \Illuminate\Http\Response
     */
    public function show(LandingPageHeader $landingPageHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandingPageHeader  $landingPageHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingPageHeader $landingPageHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandingPageHeader  $landingPageHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingPageHeader $landingPageHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandingPageHeader  $landingPageHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingPageHeader $landingPageHeader)
    {
        //
    }
}
