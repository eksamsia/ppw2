<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Katalog;
use File;
use Image;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 3;
        $katalog = Katalog::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($katalog->currentPage() -1);
        return view('katalog.index', compact('katalog','no'));
    }

    public function search(Request $request)
    {
        $batas = 5;
        $cari = $request->kata;
        $katalog = Katalog::where('nama_produk','like',"%".$cari."%")->orwhere('nama_brand','like','%'.$cari.'%')->paginate($batas);
        $jumlah_produk = $katalog->count();
        $no = $batas * ( $katalog->currentPage() - 1);
        return view('katalog.search', compact('jumlah_produk', 'katalog', 'cari', 'no'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('katalog.create');
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
            'nama_produk'         => 'required|string',
            'nama_brand'       => 'required|string|max:30',
            'harga'         => 'required|numeric',
            'tgl_terbit'    => 'required|date',
            'foto'          => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $katalog = new Katalog;
        $katalog->nama_produk = $request->nama_produk;
        $katalog->nama_brand = $request->nama_brand;
        $katalog->harga = $request->harga;
        $katalog->keterangan = $request->keterangan;
        $katalog->created_at = $request->created_at;
        $katalog->katalog_seo = Str::slug($request->nama_produk);
        $foto = $request->foto;
        // dd($request);
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $katalog->foto = $namafile;
        // $katalog->suka;
        $katalog->save();
        return redirect('/katalog')->with('pesan','Data produk Berhasil disimpan');
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
        $katalog = Katalog::find($id);
        return view('katalog.edit', compact('katalog'));
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
        $katalog = Katalog::find($id);
        $katalog->nama_produk = $request->nama_produk;
        $katalog->nama_brand = $request->nama_brand;
        $katalog->harga = $request->harga;
        $katalog->keterangan = $request->keterangan;
        $katalog->created_at = $request->created_at;
        $katalog->katalog_seo = Str::slug($request->nama_produk);
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();
        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $katalog->foto = $namafile;
        $katalog->suka;
        $katalog->update();
        return redirect('/katalog')->with('pesan','Data produk Berhasil diupdate');
    }

    public function list_katalog(){
        $batas = 3;
        $katalog = Katalog::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ( $katalog->currentPage() - 1);
        return view('katalog.list_katalog', compact('katalog', 'no'));
    }

    public function galkatalog($title){
        $batas = 3;
        $katalog = Katalog::where('katalog_seo', $title)->first();
        $galeris = $katalog->photos()->orderBy('id', 'desc')->paginate($batas);
        $data_komentar = Komentar::where('id_katalog', $katalog->id)->get();
        return view('katalog.detail_katalog', compact('katalog', 'galeris'));
    }

    public function likefoto(Request $request, $id){
        $katalog = Katalog::find($id);
        $katalog->increment('suka');
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $katalog = Katalog::find($id);
        $katalog->delete();
        return redirect('/katalog')->with('pesan','Data produk Berhasil dihapus');
    }
}