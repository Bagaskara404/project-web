<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('sertifikasi.index');
        // compact('profillembaga'))
        
    }
}
