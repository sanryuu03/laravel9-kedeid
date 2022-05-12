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
        $aplikasiKede = AplikasiKede::get();
        return view('admin/landingpageaplikasikede', [
            "title" => "Sangrid - landingpageaplikasikede",
            "creator" => "San",
            "aplikasiKede" => $aplikasiKede,
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
        $data = $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'picture_path' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('picture_path');
        // dd($request->file('picture_path'));
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        AplikasiKede::create([
            "title" => $data['title'],
            "caption" => $data['caption'],
            'picture_path' => $nama_file,
        ]);

        return redirect()->route('aplikasikede.index');
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
    public function destroy(AplikasiKede $aplikasiKede, $id)
    {
        $aplikasiKede = AplikasiKede::find($id);
        $aplikasiKede->delete();
        return redirect()->back();
    }
}
