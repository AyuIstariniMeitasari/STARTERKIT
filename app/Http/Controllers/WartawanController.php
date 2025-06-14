<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class WartawanController extends Controller
{
    public function index()
    {
        return view('wartawan.tambah-berita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'status' => 'unpublish',
        ]);

        return back()->with('success', 'Berita berhasil ditambahkan (menunggu persetujuan admin).');
    }
}
