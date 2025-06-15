<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Adopsi;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdopsiController extends Controller
{
    public function index()
{
    // Mengambil data Adopsi dan memuat relasi Pengguna
    $adopsi = Adopsi::with('pengguna') // Memuat relasi pengguna
                    ->orderBy('created_at', 'desc')
                    ->paginate(15);

    // Mengirim data ke view
    return view('kelola-adopsi.index', compact('adopsi'));
}

public function create()
{
    // Mengambil data hewan yang statusnya 'Tersedia'
    $hewan = Hewan::where('status', 'Tersedia')->get();
    
    // Mengambil data pengguna
    $pengguna = Pengguna::all();

    // Menampilkan form tambah adopsi dengan data hewan dan pengguna
    return view('kelola-adopsi.create', compact('hewan', 'pengguna'));
}

public function store(Request $request)
{
    // dd($request->all());
    // Validasi input data
    $request->validate([
        'hewan_id' => 'required|exists:hewan,hewan_id',
        'pengguna_id' => 'required|exists:pengguna,pengguna_id',
    ]);

    // Menyimpan data adopsi
    $adopsi = new Adopsi();
    $adopsi->hewan_id = $request->hewan_id;
    $adopsi->pengguna_id = $request->pengguna_id;
    $adopsi->status = 'Menunggu Konfirmasi'; 
    $adopsi->created_at = now();
    $adopsi->updated_at = now();
    $adopsi->save();

    // Redirect dengan pesan sukses
    return redirect()->route('adopsi.index')->with('success', 'Adopsi berhasil ditambahkan!');
}


public function updateStatus(Request $request, $id)
{
    $adopsi = Adopsi::findOrFail($id);
    $adopsi->status = $request->status;
    $adopsi->save();
    
    return redirect()->back()->with('success', 'Status berhasil diperbarui!');
}

public function destroy($id)
{
    $adopsi = Adopsi::findOrFail($id);
    $adopsi->delete();
    
    return redirect()->back()->with('success', 'Data adopsi berhasil dihapus!');
}


}
