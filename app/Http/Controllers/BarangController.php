<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController
{
/*  public function index()
    {
        $barangs = Barang::all();

        return view('barang.index',compact('barangs'));

    }
*/

public function index(Request $request){
    $kataKunci = $request ->input('cari');

    $barangs = Barang ::when($kataKunci, 
        function ($query, $kataKunci){
        $query ->where(
            'nama_barang',
            'like',
            '%' . $kataKunci . '%'
        );
    })->get();

    return view('barang.index', compact('barangs', 'kataKunci'));
}

    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        $request -> validate([
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric'
        ]);

        Barang::create([
            'nama_barang' => $request ->nama_barang,
            'stok' => $request ->stok,
            'harga' => $request ->harga
        ]);
        return redirect('/barang')
            ->with('succes', 'Data barang berhasil disimpan');
    }
}
