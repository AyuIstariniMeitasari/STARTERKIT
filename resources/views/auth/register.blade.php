@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Hidden redirect --}}
        <input type="hidden" name="redirect" value="{{ request('redirect') }}">

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Daftar</button>

        <p class="mt-3 text-center">
            Sudah punya akun?
            <a href="{{ url('/login?redirect=' . request('redirect')) }}">Login di sini</a>
        </p>
    </form>
</div>
@endsection
