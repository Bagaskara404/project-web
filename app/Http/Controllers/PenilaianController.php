<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penilaian;


class PenilaianController extends Controller
{
    
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $penilaian = penilaian::all();
    return view('penilaian.index', compact('penilaian'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'id_penilaian' => 'required',
    ]);
    penilaian::create($request->all());
    return redirect()->route('penilaian.index')
      ->with('success', 'penilaian created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id_penilaian
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id_penilaian)
  {
    $request->validate([
      'id_penilaian' => 'required',
      
    ]);
    $penilaian = penilaian::find($id_penilaian);
    $penilaian->update($request->all());
    return redirect()->route('penilaian.index')
      ->with('success', 'Penilaian updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id_penilaian
   * @return \Illuminate\Http\Response
   */
  public function destroy($id_penilaian)
  {
    $penilaian = penilaian::find($id_penilaian);
    $penilaian->delete();
    return redirect()->route('penilaian.index')
      ->with('success', 'Penilaian deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('penilaian.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id_penilaian
   * @return \Illuminate\Http\Response
   */
  public function show($id_penilaian)
  {
    $penilaian = penilaian::find($id_penilaian);
    return view('penilaian.show', compact('penilaian'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id_penilaian
   * @return \Illuminate\Http\Response
   */
  public function edit($id_penilaian)
  {
    $penilaian = penilaian::find($id_penilaian);
    return view('penilaian.edit', compact('penilaian'));
  }

}
