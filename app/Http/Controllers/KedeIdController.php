<?php

namespace App\Http\Controllers;

use App\Models\KedeId;
use Illuminate\Http\Request;

class KedeIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kedePromo = KedeId::get();
        return view('admin/kedeid', [
            "title" => "Sangrid - kedeid",
            "creator" => "San",
            "kedePromo" => $kedePromo,
        ]);
    }

    public function formCreate()
    {
		return view('admin/formkedeid', [
            "title" => "Sangrid - formkedeid",
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
            'poster' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'link_poster' => 'required',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('poster');
        // dd($request->file('poster'));
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        KedeId::create([
            "link_poster" => $data['link_poster'],
            'poster' => $nama_file,
        ]);

        return redirect()->route('kedeid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KedeId  $kedeId
     * @return \Illuminate\Http\Response
     */
    public function show(KedeId $kedeId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KedeId  $kedeId
     * @return \Illuminate\Http\Response
     */
    public function edit(KedeId $kedeId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KedeId  $kedeId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KedeId $kedeId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KedeId  $kedeId
     * @return \Illuminate\Http\Response
     */
    public function destroy(KedeId $kedeId, $id)
    {
        $kedeId = KedeId::find($id);
        $kedeId->delete();
        return redirect()->back();
    }
}
