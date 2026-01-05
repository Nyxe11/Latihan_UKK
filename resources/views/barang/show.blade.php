@extends('layouts.app')

@section('content')
<h2>Detail Barang</h2>

<p><b>ID Barang:</b> {{ $barangs->id_barang }}</p>
<p><b>Nama Barang:</b> {{ $barangs->nama_barang }}</p>
<p><b>Harga:</b> {{ $barangs->harga }}</p>
<p><b>Stok:</b> {{ $barangs->stok }}</p>
<p><b>Deskripsi:</b> {{ $barangs->deskripsi }}</p>

<a href="/barang">← Kembali</a>
@endsection
