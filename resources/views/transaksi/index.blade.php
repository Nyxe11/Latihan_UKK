@extends('layouts.app')

@section('content')
<h2>Data Transaksi</h2>

<table>
    <thead>
        <tr>
            <th>Barang ID</th>
            <th>Harga</th>
            <th>Diskon (%)</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($transaksis as $i => $t)
        <tr>
            <td>{{ $i + 1}}</td>
            <td>{{ $t->barang_ID->nama_barang }}</td>
            <td>Rp{{ number_format($t->harga, 0, ',', '.') }}</td>
            <td>{{ $t->diskon }}</td>
            <td>Rp{{ number_format($t->total_harga, 0, ',', '.') }}</td>
            <td>
                <a href="/transaksi/{{ $t->id }}">Show</a> |
                <a href="/transaksi/{{ $t->id }}/edit">Edit</a> |
                <form action="/transaksi/{{ $t->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus transaksi?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
