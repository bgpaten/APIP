<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public $barangmasuk;
     public function __construct()
     {
         $this->barangmasuk = new Barangmasuk();
     }    
    public function index()
    {
        //
        $data = Barangmasuk::all();
        return view('barangmasuk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $supplier= Supplier::all();
        return view('barangmasuk.create',compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        //
        $rules = [
            'kode' => 'required|min:2|max:25',
            'nama_barang' => 'required|min:2|max:20',
            'jumlah_masuk' => 'required|max:250',
            'supplier' => 'required',
           

        ];
        $messages = [
            'required' => ':attribute gak boleh kosong ',
            'unique' => ':attribute sudah ada, silahkan gunakan yang lain',
            'max' => ' jumlah :attribute terlalu banyak',
            'min' => 'jumlah :attribute terlalu terlalu sedikit',
        ];
        $this->validate($request, $rules, $messages);
       
        $this->barangmasuk->kode_barang = $request->kode;
        $this->barangmasuk->nama_barang = $request->nama_barang;
        $this->barangmasuk->jumlah_masuk = $request->jumlah_masuk;
        $this->barangmasuk->supplier_id = $request->supplier;


        $this->barangmasuk->save();
        Alert::success('Successpull', 'Data Berhasil di Tambahkan');
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barangmasuk $barangmasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barangmasuk $barangmasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barangmasuk $barangmasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barangmasuk $barangmasuk)
    {
        //
    }
}
