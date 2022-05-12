<?php

namespace App\Http\Controllers;

use App\Models\TutorialMendaftar;
use Illuminate\Http\Request;

class TutorialMendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorialBelanja = TutorialMendaftar::get();
        return view('admin/tutorialmendaftar', [
            "title" => "Sangrid - tutorialbelanja",
            "creator" => "San",
            "tutorialBelanja" => $tutorialBelanja,
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
            'header' => 'required',
            'link_youtube' => 'required',
        ]);
        TutorialMendaftar::create($data);
        return redirect()->route('tutorialmendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TutorialMendaftar  $tutorialMendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(TutorialMendaftar $tutorialMendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TutorialMendaftar  $tutorialMendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(TutorialMendaftar $tutorialMendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TutorialMendaftar  $tutorialMendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorialMendaftar $tutorialMendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TutorialMendaftar  $tutorialMendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(TutorialMendaftar $tutorialMendaftar, $id)
    {
        $tutorialMendaftar = TutorialMendaftar::find($id);
        $tutorialMendaftar->delete();
        return redirect()->back();
    }
}
