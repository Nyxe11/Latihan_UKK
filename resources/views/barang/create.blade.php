@extends('layouts.app')

@section('content')
<h2>Tambah Barang</h2>

<form action="/barang" method="POST">
    @csrf

    <label>ID Barang</label>
    <input type="text" name="id_barang" required>

    <label>Nama Barang</label>
    <input type="text" name="nama_barang" required>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <label>Stok</label>
    <input type="number" name="stok" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="4"></textarea>

    <button type="submit">Simpan</button>
</form>
@endsection

