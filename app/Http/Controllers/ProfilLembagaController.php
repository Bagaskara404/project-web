<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\ProfilLembaga;

class ProfilLembagaController extends Controller
{
    public function index(){
        //$profillembaga = ProfilLembaga::all();
        return view('profillembaga.index');
         //compact('profillembaga') ;
        
    }

        
    


}



