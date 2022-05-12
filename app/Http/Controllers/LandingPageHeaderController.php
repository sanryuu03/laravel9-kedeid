<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPageHeader;
use Illuminate\Support\Facades\Storage;

class LandingPageHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar = LandingPageHeader::get();
        return view('admin/landingpageheader', [
            "title" => "Sangrid - landingpageheader",
            "creator" => "San",
            'gambar' => $gambar
        ]);
    }

    public function proses_upload(Request $request){

        $request->validate([
            'picture_path' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

           ]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('picture_path');
        // dd($request->file('picture_path'));
        $nama_file = time()."_".$file->getClientOriginalName();
        // return response()->json($nama_file);

      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';

      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';

      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';

      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';

      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'storage';

                // upload file
		$file->move($tujuan_upload,$nama_file);

        LandingPageHeader::create([
			'picture_path' => $nama_file,
		]);

		return redirect()->back();
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
        $landingPageHeader->delete();
        return redirect()->route('header');
    }

    public function hapus($id){
		// hapus file
		$gambar = LandingPageHeader::where('id',$id)->first();
		Storage::delete('storage/'.$gambar->picture_path);

		// hapus data
		LandingPageHeader::where('id',$id)->delete();

		return redirect()->back();
	}
}
