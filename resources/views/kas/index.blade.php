@extends('layouts.app')

@section('content')
<h2>Data Kas</h2>
<a href="{{ route('kas.create') }}" class="btn btn-success mb-3">➕ Tambah Pembayaran</a>

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nama Siswa</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kas as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->siswa->nama }}</td>
            <td>{{ $k->tanggal }}</td>
            <td>Rp {{ number_format($k->jumlah, 0, ',', '.') }}</td>
            <td>{{ $k->keterangan }}</td>
            <td>
                <a href="{{ route('kas.edit', $k->id) }}" class="btn btn-warning btn-sm">✏ Edit</a>
                <form action="{{ route('kas.destroy', $k->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
