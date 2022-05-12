<?php

namespace App\Http\Controllers;

use App\Models\LandingPageStatsDetail;
use Illuminate\Http\Request;

class LandingPageStatsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statsDetail = LandingPageStatsDetail::take(7)->get();
        return view('admin/landingpagestatsdetail', [
            "title" => "Sangrid - landingpagestatsdetail",
            "creator" => "San",
            "statsDetail" => $statsDetail,
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
        $data = $request->validate([
            'caption_kiri' => 'required',
            'caption_tengah' => 'required',
            'caption_kanan' => 'required',
        ]);
        LandingPageStatsDetail::create($data);
        return redirect()->route('stats.detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandingPageStatsDetail  $landingPageStatsDetail
     * @return \Illuminate\Http\Response
     */
    public function show(LandingPageStatsDetail $landingPageStatsDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandingPageStatsDetail  $landingPageStatsDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingPageStatsDetail $landingPageStatsDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandingPageStatsDetail  $landingPageStatsDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingPageStatsDetail $landingPageStatsDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandingPageStatsDetail  $landingPageStatsDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingPageStatsDetail $landingPageStatsDetail)
    {
        //
    }

    public function delete($id)
    {
        $statsDetail = LandingPageStatsDetail::find($id);
        $statsDetail->delete();
        return redirect()->back();
    }
}
