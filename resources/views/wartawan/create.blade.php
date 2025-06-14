@extends('layouts.app')

@section('content')
<div class="container">
    <h3>➕ Tambah Berita Baru</h3>

    <form method="POST" action="{{ route('berita.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Isi</label>
            <textarea name="isi" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="published">Published</option>
                <option value="unpublished">Unpublished</option>
            </select>
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('wartawan.dashboard') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
