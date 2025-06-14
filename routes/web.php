<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Wartawan\BeritaController;

// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
});

// Lihat Berita
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Admin login/register/dashboard
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::get('/admin/register', [AdminLoginController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminLoginController::class, 'register']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

// Tampilkan form lupa password
Route::get('/admin/forgot-password', function () {
    return view('admin.forgot-password');
})->name('password.request');

// Kirim email reset
Route::post('/admin/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->name('password.email');

// Wartawan Dashboard
Route::get('/wartawan/dashboard', function () {
    return view('wartawan.dashboard');
});

Route::prefix('wartawan')->group(function () {
    Route::get('/dashboard', [BeritaController::class, 'index'])->name('wartawan.dashboard');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');
});

Route::post('/admin/logout', function () {
    Auth::logout();
    return redirect('/');
});
