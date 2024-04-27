<?php

namespace App\Http\Controllers;

use App\Models\KebutuhanSertifikasi;
use Illuminate\Http\Request;


class KebutuhanSertifikasiController extends Controller
{
    public function index()
    {
        $kebutuhansertifikasi=KebutuhanSertifikasi::all();
        return view('/');
    }
    public function create(Request $request)
    {
       // Create a new instance of the Student model
       $kebutuhansertifikasi = new KebutuhanSertifikasi;
       $kebutuhansertifikasi->name = $request->name;
       $kebutuhansertifikasi->city = $request->city;
       $kebutuhansertifikasi->marks = $request->marks;
       $kebutuhansertifikasi->save();
       return redirect(route('sds.index'))->with('status', ' Data Telah Disimpan!');
    }
}
