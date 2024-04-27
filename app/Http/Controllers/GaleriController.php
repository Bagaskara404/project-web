<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('galeri.index');
        // compact('profillembaga'))
        
    }
}
