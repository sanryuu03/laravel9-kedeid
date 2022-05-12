<?php

namespace App\Http\Controllers;

use App\Models\TutorialBelanja;
use Illuminate\Http\Request;

class TutorialBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorialBelanja = TutorialBelanja::get();
        return view('admin/tutorialbelanja', [
            "title" => "Sangrid - tutorialbelanja",
            "creator" => "San",
            'tutorialBelanja' => $tutorialBelanja,
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
        TutorialBelanja::create($data);
        return redirect()->route('tutorialbelanja');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TutorialBelanja  $tutorialBelanja
     * @return \Illuminate\Http\Response
     */
    public function show(TutorialBelanja $tutorialBelanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TutorialBelanja  $tutorialBelanja
     * @return \Illuminate\Http\Response
     */
    public function edit(TutorialBelanja $tutorialBelanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TutorialBelanja  $tutorialBelanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorialBelanja $tutorialBelanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TutorialBelanja  $tutorialBelanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(TutorialBelanja $tutorialBelanja, $id)
    {
        $tutorialBelanja = TutorialBelanja::find($id);
        $tutorialBelanja->delete();
        return redirect()->back();
    }
}
