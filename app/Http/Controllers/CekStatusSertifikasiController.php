<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CekStatusSertifikasiController extends Controller
{
    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('cekstatussertifikasi.index');
        // compact('profillembaga'))
        
    }
}
