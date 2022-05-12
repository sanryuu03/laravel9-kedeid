<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::get();
        return view('admin/testimoni', [
            "title" => "Sangrid - testimoni",
            "creator" => "San",
            "testimoni" => $testimoni,
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
            'picture_path' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'caption' => 'required',
            'buy' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('picture_path');
        // dd($request->file('picture_path'));
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        Testimoni::create([
            'picture_path' => $nama_file,
            'name' => $data['name'],
            'caption' => $data['caption'],
            'buy' => $data['buy'],
        ]);
        return redirect()->route('testimoni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni, $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect()->back();
    }
}
