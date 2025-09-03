<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        $kas = Kas::with('siswa')->get();
        return view('kas.index', compact('kas'));
    }

    public function create()
    {
        $siswa = Siswa::all();
        return view('kas.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        Kas::create($request->all());
        return redirect()->route('kas.index')->with('success', 'Pembayaran kas berhasil ditambahkan.');
    }

    public function edit(Kas $ka)
    {
        $siswa = Siswa::all();
        return view('kas.edit', compact('ka', 'siswa'));
    }

    public function update(Request $request, Kas $ka)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        $ka->update($request->all());
        return redirect()->route('kas.index')->with('success', 'Pembayaran kas berhasil diperbarui.');
    }

    public function destroy(Kas $ka)
    {
        $ka->delete();
        return redirect()->route('kas.index')->with('success', 'Pembayaran kas berhasil dihapus.');
    }
}
