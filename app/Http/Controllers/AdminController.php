<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.dashboard', compact('beritas'));
    }

    public function publish($id)
    {
        Berita::where('id', $id)->update(['status' => 'publish']);
        return back()->with('success', 'Berita berhasil dipublish.');
    }

    public function unpublish($id)
    {
        Berita::where('id', $id)->update(['status' => 'unpublish']);
        return back()->with('success', 'Berita berhasil di-unpublish.');
    }
}
