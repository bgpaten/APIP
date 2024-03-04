<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $pinjam;
    public function __construct()
    {
        $this->pinjam = new Pinjam;
    }
    public function index()
    {
        //
        $pinjam = Pinjam::all();

        return view("user.history", compact('pinjam'));
    }

    public function history()
    {
        //
        $pinjam = Pinjam::all();

        return view("user.history", compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rules = [
            // 'sampul' => 'required|mimes:jpg,png|max:200', // unique: nama_tabel, nama_field
            'user_id' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah_pinjam' => 'required',
            'tgl_kembali' => 'required'
        ];

        // pesan error
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'mimes' => ':attribute file tidak didukung, silakan gunakan (.jpg/.png)'
        ];

        $this->validate($request, $rules, $messages);
        
        // $gambar = $request->sampul;
        // $namaFile = time() . rand(100,999) . "." . $gambar->getClientOriginalExtension();

        // $this->buku->sampul = $namaFile;
        $this->pinjam->user_id = $request->user_id;
        $this->pinjam->kode_barang = $request->kode_barang;
        $this->pinjam->nama_barang = $request->nama_barang;
        $this->pinjam->jumlah_pinjam = $request->jumlah_pinjam;
        $this->pinjam->tgl_kembali = $request->tgl_kembali;
        $this->pinjam->keterangan = $request->keterangan;

        // $gambar->move(public_path() . '/upload' . $namaFile);
        $this->pinjam->save();

        Alert::success('Successpull', 'Barang Berhasil Dipinjam');
        return redirect()->route('pinjam');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pinjam $pinjam)
    {
        //
    }
}
