@extends('layouts.app')

@section('content')
<h2>Edit Pembayaran Kas</h2>

<form action="{{ route('kas.update', $ka->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nama Siswa</label>
        <select name="siswa_id" class="form-control" required>
            @foreach($siswa as $s)
                <option value="{{ $s->id }}" {{ $s->id == $ka->siswa_id ? 'selected' : '' }}>{{ $s->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ $ka->tanggal }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" value="{{ $ka->jumlah }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Keterangan</label>
        <input type="text" name="keterangan" value="{{ $ka->keterangan }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
