<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KebutuhanSertifikasi;

class TambahSertifikasiLembagaController extends Controller
{
    public function index(){
        return view('tambahsertifikasilembaga.index');
    }

    public function create(){
        return view('tambahsertifikasilembaga.create');
    }

    public function show(){
        return view('tambahsertifikasilembaga.show');
    }

    public function upload(Request $request)
    {
        // Validasi jika ada file yang diunggah
        $request->validate([
            
            'nama_Sertifikasi' => 'required',
            'dokumen_lembaga' => 'required|mimes:zip,rar|max:10240', // Hanya izinkan file dengan ekstensi .zip atau .rar dan ukuran maksimal 10MB
        ]);

        // Simpan file ke direktori penyimpanan yang sesuai
        $file = $request->file('dokumen_lembaga');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('dokumen_lembaga'), $fileName);

        // Simpan data nama petani dan nama sertifikasi ke dalam database
        TambahSertifikasiLembagaController::create([
            
            'nama_sertifikasi' => $request->sertifikasi,
            'dokumen_lembaga' => $fileName,
        ]);

        // Tampilkan pesan sukses atau redirect ke halaman lain
        return back()->with('success', 'File Berhasil Diunggah dan Data Derhasil Disimpan.');
    }
}
