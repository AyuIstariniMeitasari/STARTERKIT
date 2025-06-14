@extends('layouts.app') {{-- Ganti dengan layout kamu jika pakai selain app.blade.php --}}

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Hidden redirect --}}
        <input type="hidden" name="redirect" value="{{ request('redirect') }}">

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>

        <p class="mt-3 text-center">
            Belum punya akun?
            <a href="{{ url('/register?redirect=' . request('redirect')) }}">Daftar di sini</a>
        </p>
    </form>
</div>
@endsection
