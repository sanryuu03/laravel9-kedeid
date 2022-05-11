<?php

namespace App\Http\Controllers;

use App\Models\AplikasiKede;
use Illuminate\Http\Request;

class AplikasiKedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/landingpageaplikasikede', [
            "title" => "Sangrid - landingpageaplikasikede",
            "creator" => "San"
        ]);
    }

    public function formCreate()
    {
		return view('admin/formlandingpageaplikasikede', [
            "title" => "Sangrid - formlandingpageaplikasikede",
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
     * @param  \App\Models\AplikasiKede  $aplikasiKede
     * @return \Illuminate\Http\Response
     */
    public function show(AplikasiKede $aplikasiKede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AplikasiKede  $aplikasiKede
     * @return \Illuminate\Http\Response
     */
    public function edit(AplikasiKede $aplikasiKede)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AplikasiKede  $aplikasiKede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AplikasiKede $aplikasiKede)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AplikasiKede  $aplikasiKede
     * @return \Illuminate\Http\Response
     */
    public function destroy(AplikasiKede $aplikasiKede)
    {
        //
    }
}
