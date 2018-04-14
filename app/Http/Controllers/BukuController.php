<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
      $buku = \App\Buku::get();

      return view('buku.index',compact('buku'));
    }

    public function create(){
      return view('buku.create');
    }
    public function store(Request $request){
      $judul = $request->judul;
      $pembuat = $request->pembuat;
      $penerbit = $request->penerbit;

      $buku = new \App\Buku;
      $buku->judul = $judul;
      $buku->pembuat = $pembuat;
      $buku->penerbit = $penerbit;
      $buku->save();

      return redirect('/');
    }

    public function edit($id_buku){
        $data = \App\Buku::find($id_buku);
        return view('buku.edit',compact('data'));
    }

    public function update(Request $request, $id){
      $judul = $request->judul;
      $pembuat = $request->pembuat;
      $penerbit = $request->penerbit;

      $buku =  \App\Buku::find($id);
      $buku->judul = $judul;
      $buku->pembuat = $pembuat;
      $buku->penerbit = $penerbit;
      $buku->save();

      return redirect('/');
    }

    public function destroy($id){
      $buku =  \App\Buku::find($id);
      $buku->delete();
      return redirect('/');
    }
}
