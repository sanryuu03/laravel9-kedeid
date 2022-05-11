<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/landingpagejenisproduk', [
            "title" => "Sangrid - landingpagejenisproduk",
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
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function show(JenisProduk $jenisProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisProduk $jenisProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisProduk $jenisProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisProduk  $jenisProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisProduk $jenisProduk)
    {
        //
    }
}
