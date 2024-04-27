<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;

class ArtikelController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $artikel = artikel::all();
    return view('artikel.index', compact('artikel'));
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
      'txt_artikel' => 'required',
    ]);
    artikel::create($request->all());
    return redirect()->route('artikel.index')
      ->with('success', 'Artikel created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id_artikel
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id_artikel)
  {
    $request->validate([
      'txt_artikel' => 'required',
      
    ]);
    $artikel = artikel::find($id_artikel);
    $artikel->update($request->all());
    return redirect()->route('artikel.index')
      ->with('success', 'Artikel updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id_artikel
   * @return \Illuminate\Http\Response
   */
  public function destroy($id_artikel)
  {
    $artikel = artikelt::find($id_artikel);
    $artikel->delete();
    return redirect()->route('artikel.index')
      ->with('success', 'Artikel deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('artikel.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id_artikel
   * @return \Illuminate\Http\Response
   */
  public function show($id_artikel)
  {
    $artikel = artikel::find($id_artikel);
    return view('artikel.show', compact('artikel'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id_artikel
   * @return \Illuminate\Http\Response
   */
  public function edit($id_artikel)
  {
    $artikel = artikel::find($id_artikel);
    return view('artikel.edit', compact('artikel'));
  }
}
