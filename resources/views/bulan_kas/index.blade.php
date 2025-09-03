@extends('layouts.app')

@section('content')
<h2>Target Kas Bulanan</h2>
<a href="{{ route('bulan_kas.create') }}" class="btn btn-success mb-3">➕ Tambah Target</a>

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Bulan</th>
            <th>Target</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bulanKas as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->bulan }}</td>
            <td>Rp {{ number_format($b->jumlah_target, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('bulan_kas.edit', $b->id) }}" class="btn btn-warning btn-sm">✏ Edit</a>
                <form action="{{ route('bulan_kas.destroy', $b->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
