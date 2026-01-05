<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\transaksi;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class transaksicontroller extends Controller
{
    public function index()
    {
        $transaksis = transaksi::with('barang')->latest()->get();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $barangs = barang::all();
        return view('transaksi.create', compact('barangs')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_ID' => 'required|exists:barangs,id',
            'diskon' => 'required|numeric|min:0|max:100',
        ]);

        $barangs = barang::find($request->barang_id);
        $harga = $barangs->harga;
        $diskon = $request->diskon;
        $total_harga = $harga - ($harga * ($diskon / 100));

        transaksi::create([
            'barang_ID' => $barangs->id,
            'harga' => $harga,
            'diskon' => $diskon,
            'total_harga' => $total_harga,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'transaksi berhasil ditambahkan');

    }

    public function destroy(transaksi $transaksi) {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
