<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pinjam;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PinjemController extends Controller
{
    public $pinjam;
    public function __construct()
    {
        $this->pinjam = new Pinjam;
    }
    public function index()
    {
        $pinjam = Pinjam::all();

        return view("pinjambarang.index", compact('pinjam'));
    }

    public function create()
    {
        $user = User::all();
        $barang = Barang::all();
        return view('pinjambarang.create', compact( 'user','barang'));
    }

    public function store(Request $request)
    {
        $rules = [
            'peminjam' => 'required',
            'jumlah' => 'required',
            'nama' => 'required',
            'kode' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required'
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong',
        ];

        $this->validate($request, $rules, $messages);

        $this->pinjam->user_id = $request->peminjam;
        $this->pinjam->kode_barang = $request->kode;
        $this->pinjam->nama_barang = $request->nama;
        $this->pinjam->jumlah_pinjam = $request->jumlah;
        $this->pinjam->created_at = $request->tgl_pinjam;
        $this->pinjam->tgl_kembali = $request->tgl_kembali;

        $this->pinjam->save();

        Alert::success('Successpull', 'Barang Berhasil Dipinjam');
        return redirect()->route('pinjem.index');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
