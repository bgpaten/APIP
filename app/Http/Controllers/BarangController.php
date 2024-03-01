<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Kondisi;
use App\Models\Lokasi;
use App\Models\Supplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class BarangController extends Controller
{


    public $barang;
    public function __construct()
    {
        $this->barang = new Barang();
    }
    public function index()
    {
        //
        $data = Barang::all();
        return view('barang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $ktg = Kategori::all();
        $lokasi = Lokasi::all();
        $kondisi = Kondisi::all();
        $suplier = Supplier::all();
        return view('barang.create',compact('ktg','lokasi','kondisi','suplier'));
     
    }
    public function store(Request $request)
    {
        //
        $rules = [
            // max:ukuran file dalam kb
            'gambar' => 'required|mimes:jpg,png,jpeg|max:250',
            'kode' => 'required|unique:barang,kode',
            'nama' => 'required|max:25 ',
            'jumlah' => 'required',
            'lokasi' => 'required',
            'kondisi' => 'required',
            'kategori' => 'required',
            'supplier' => 'required',

        ];
        $messages = [
            'required' => ':attribute gak boleh kosong cuy',
            'mimes' => 'extensi file tidak didukung, silahkan gunakan (.jpg/.png/.jpeg)',
            'unique' => ':attribute sudah ada, silahkan gunakan yang lain',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
        ];
        $this->validate($request, $rules, $messages);
        // dd($request->all());
        $gambar = $request->sampul;
        // $namaFile = $gambar->getClientOriginalName();
        // rename nama gambar
        // getClientOriginalExtension = untuk mendapatkan ekstensi file
        // getClientOriginalName = untuk mendapatkan nama file
        $namaFile = time() . rand(100, 999) . '.'. $gambar->getClientOriginalExtension();
        // echo $namaFile;
        $this->barang->image = $namaFile;
        $this->barang->kode = $request->kode;
        $this->barang->nama = $request->nama;
        $this->barang->jumlah = $request->jumlah;
        $this->barang->kategori_id = $request->kategori;
        $this->barang->lokasi_id = $request->lokasi;
        $this->barang->kondisi_id = $request->kondisi;
        $this->barang->supplier_id = $request->supplier;

        // pindahin  file ke folder upload yang ada di dalam public
        $gambar->move(public_path() . '/img', $namaFile);
        // $gambar->move('upload', $namaFile);
        $this->barang->save();
        Alert::success('Successpull', 'Data Berhasil di Tambahkan');
        return redirect()->route('barang.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
        $data = Barang::all();
        return view('barang.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
