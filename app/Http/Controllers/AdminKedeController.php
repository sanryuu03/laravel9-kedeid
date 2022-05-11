<?php

namespace App\Http\Controllers;

use App\Models\AdminKede;
use Illuminate\Http\Request;

class AdminKedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index', [
            "title" => "Sangrid CRUD",
            "creator" => "San"
        ]);
    }

    public function login()
    {
        return view('admin/loginadmin', [
            "title" => "Sangrid CRUD",
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
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function show(AdminKede $adminKede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminKede $adminKede)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminKede $adminKede)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminKede  $adminKede
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminKede $adminKede)
    {
        //
    }
}
