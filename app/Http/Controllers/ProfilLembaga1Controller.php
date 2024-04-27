<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilLembaga1Controller extends Controller
{
    public function index(){//$profillembaga = ProfilLembaga::all();
    return view('profillembaga1.index');
     //compact('profillembaga') ;
    }
}
