@extends('layouts.app')

@section('content')
<h2>Data Barang</h2>

<table>
    <thead>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($barangs as $b)
        <tr>
            <td>{{ $b->id_barang }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->harga }}</td>
            <td>{{ $b->stok }}</td>
            <td>{{ $b->deskripsi }}</td>
            <td>
                <a href="/barang/{{ $b->id }}">Show</a> |
                <a href="/barang/{{ $b->id }}/edit">Edit</a> |
                <form action="/barang/{{ $b->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus data?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
