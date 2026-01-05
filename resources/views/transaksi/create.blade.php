@extends('layouts.app')

@section('content')
<h2>Tambah Transaksi</h2>

<form action="/transaksi" method="POST">
    @csrf

    <label>Barang ID</label>
    <input type="text" name="barang_ID" required>

    <label>Harga</label>
    <input type="number" id="harga" name="harga" required>

    <label>Diskon (%)</label>
    <input type="number" id="diskon" name="diskon" required>

    <label>Total Harga</label>
    <input type="number" id="total_harga" name="total_harga" readonly>

    <button type="submit">Simpan</button>
</form>

<script>
    const harga = document.getElementById("harga");
    const diskon = document.getElementById("diskon");
    const total = document.getElementById("total_harga");

    function hitungTotal() {
        let h = parseFloat(harga.value) || 0;
        let d = parseFloat(diskon.value) || 0;

        let hasil = h - (h * d / 100);
        total.value = hasil;
    }

    harga.addEventListener("input", hitungTotal);
    diskon.addEventListener("input", hitungTotal);
</script>

@endsection
