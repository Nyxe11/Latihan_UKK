@extends('layouts.app')

@section('content')
<h2>Edit Barang</h2>

<form action="/barang/{{ $barangs->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>ID Barang</label>
    <input type="text" name="id_barang" value="{{ $barangs->id_barang }}" required>

    <label>Nama Barang</label>
    <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}" required>

    <label>Harga</label>
    <input type="number" name="harga" value="{{ $barangs->harga }}" required>

    <label>Stok</label>
    <input type="number" name="stok" value="{{ $barangs->stok }}" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="4">{{ $barangs->deskripsi }}</textarea>

    <button type="submit">Update</button>
</form>
@endsection
