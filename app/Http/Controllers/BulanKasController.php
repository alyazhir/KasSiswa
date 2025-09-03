<?php

namespace App\Http\Controllers;

use App\Models\BulanKas;
use Illuminate\Http\Request;

class BulanKasController extends Controller
{
    public function index()
    {
        $bulanKas = BulanKas::all();
        return view('bulan_kas.index', compact('bulanKas'));
    }

    public function create()
    {
        return view('bulan_kas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required|string|max:50',
            'jumlah_target' => 'required|numeric',
        ]);

        BulanKas::create($request->all());
        return redirect()->route('bulan_kas.index')->with('success', 'Target kas bulanan berhasil ditambahkan.');
    }

    public function edit(BulanKas $bulanKa)
    {
        return view('bulan_kas.edit', compact('bulanKa'));
    }

    public function update(Request $request, BulanKas $bulanKa)
    {
        $request->validate([
            'bulan' => 'required|string|max:50',
            'jumlah_target' => 'required|numeric',
        ]);

        $bulanKa->update($request->all());
        return redirect()->route('bulan_kas.index')->with('success', 'Target kas bulanan berhasil diperbarui.');
    }

    public function destroy(BulanKas $bulanKa)
    {
        $bulanKa->delete();
        return redirect()->route('bulan_kas.index')->with('success', 'Target kas bulanan berhasil dihapus.');
    }
}
