@extends('layouts.app')

@section('content')
<div class="container">
    <h3>✏️ Edit Berita</h3>

    <form method="POST" action="{{ route('berita.update', $berita->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="{{ $berita->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Isi</label>
            <textarea name="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="published" {{ $berita->status == 'published' ? 'selected' : '' }}>Published</option>
                <option value="unpublished" {{ $berita->status == 'unpublished' ? 'selected' : '' }}>Unpublished</option>
            </select>
        </div>
        <button class="btn btn-warning">Update</button>
        <a href="{{ route('wartawan.dashboard') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
