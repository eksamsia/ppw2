<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Katalog;
use App\Galeri;
use File;
use Image;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas =4;
        $galeri = Galeri::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($galeri->currentPage() -1);
        return view('galeri.index' , compact('galeri', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $katalog = Katalog::all();
        return view('galeri.create', compact('katalog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_galeri'         => 'required',
            'keterangan'          => 'required',
            'foto'                => 'required|image|mimes:jpeg,jpg,png'
            
        ]);
        $galeri = new Galeri;
        $galeri->nama_galeri = $request->nama_galeri;
        $galeri->keterangan = $request->keterangan;
        $galeri->id_katalog = $request->id_katalog;
        $galeri->galeri_seo = Str::slug($request->nama_galeri);
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $galeri->foto = $namafile;
        $galeri->save();
        return redirect('/galeri')->with('pesan','Data Galeri Produk Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        $katalog = Katalog::all();
        return view('galeri.edit', compact('katalog','galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        $galeri->nama_galeri = $request->nama_galeri;
        $galeri->keterangan = $request->keterangan;
        $galeri->id_katalog = $request->id_katalog;
        $galeri->galeri_seo = Str::slug($request->judul);
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $galeri->foto = $namafile;
        $galeri->update();
        return redirect('/galeri')->with('pesan','Galerimu Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return redirect('/galeri')->with('pesan','Galerimu Berhasil dihapus');
    }
}