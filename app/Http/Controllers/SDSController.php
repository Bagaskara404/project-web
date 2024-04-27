<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SDS;

class SDSController extends Controller
{

    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('sds.index');
         //compact('profillembaga') ;
        
    }

    public function upload(Request $request)
    {
        // Validasi jika ada file yang diunggah
        $validatedData=$request->validate([
            'nama_petani' => 'required',
            'nama_Sertifikasi' => 'required',
            'dokumen_petani' => 'required|mimes:zip,rar', // Hanya izinkan file dengan ekstensi .zip atau .rar dan ukuran maksimal 10MB
        ]);
        // return view('profillembaga.index');
        // Check if an image is uploaded
        if ($request->hasFile('dokumen_petani')) {
            // Store the image in the specified directory
            $imagePath = $request->file('dokumen_petani')->store('sds', 'public');

            // Add the image path to the validated data
            $validatedData['dokumen_petani'] = $imagePath;
        }

        // // Simpan data nama petani dan nama sertifikasi ke dalam database
        SDS::create(
            $validatedData
        );

        // // Tampilkan pesan sukses atau redirect ke halaman lain
        return back()->with('success', 'File Berhasil Diunggah dan Data Derhasil Disimpan.');
    }
}
