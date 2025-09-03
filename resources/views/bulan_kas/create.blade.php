@extends('layouts.app')

@section('content')
<h2>Tambah Target Kas Bulanan</h2>

<form action="{{ route('bulan_kas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Bulan</label>
        <input type="text" name="bulan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah Target</label>
        <input type="number" name="jumlah_target" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
