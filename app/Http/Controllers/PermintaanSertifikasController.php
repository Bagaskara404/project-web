<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanSertifikasi; // Pastikan Anda mengimpor model PermintaanSertifikasi

class PermintaanSertifikasController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('sds1.index');
         //compact('profillembaga') ;
        
    }
    
}
