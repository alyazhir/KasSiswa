@extends('layouts.app')

@section('content')
<h2>Data Siswa</h2>
<a href="{{ route('siswa.create') }}" class="btn btn-success mb-3">➕ Tambah Siswa</a>

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>{{ $s->alamat }}</td>
            <td>
                <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning btn-sm">✏ Edit</a>
                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
