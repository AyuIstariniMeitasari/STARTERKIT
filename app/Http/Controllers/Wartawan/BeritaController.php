<?php

namespace App\Http\Controllers\Wartawan;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('wartawan.dashboard', compact('beritas'));
    }

    public function create()
    {
        return view('wartawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'status' => 'required'
        ]);

        Berita::create($request->all());

        return redirect()->route('wartawan.dashboard')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('wartawan.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'status' => 'required'
        ]);

        $berita->update($request->all());

        return redirect()->route('wartawan.dashboard')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('wartawan.dashboard')->with('success', 'Berita berhasil dihapus.');
    }
}

