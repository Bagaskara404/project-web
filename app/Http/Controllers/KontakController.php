<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('kontak.index');
        // compact('profillembaga'))
        
    }
}
