@extends('layouts.app')

@section('content')
<h2>Edit Target Kas Bulanan</h2>

<form action="{{ route('bulan_kas.update', $bulanKa->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Bulan</label>
        <input type="text" name="bulan" value="{{ $bulanKa->bulan }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah Target</label>
        <input type="number" name="jumlah_target" value="{{ $bulanKa->jumlah_target }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
