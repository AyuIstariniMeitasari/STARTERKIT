<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #4e73df, #224abe);
            min-height: 100vh;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .login-title {
            font-weight: 600;
            color: #4e73df;
        }

        .top-back {
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center position-relative">

    <!-- Tombol Kembali -->
    <a href="{{ url('/') }}" class="btn btn-outline-light top-back">
        <i class="bi bi-arrow-left-circle me-1"></i> Beranda
    </a>

    <!-- Card Login -->
    <div class="card p-4 bg-white" style="max-width: 400px; width: 100%;">
        <div class="text-center mb-3">
            <i class="bi bi-person-circle display-4 text-primary"></i>
            <h4 class="login-title mt-2">Login Admin</h4>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">📧 Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="admin@example.com" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">🔒 Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="******" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </button>

            <div class="text-center mt-3 small">
                <a href="{{ route('admin.register') }}">Belum punya akun? <strong>Daftar</strong></a><br>
                <a href="{{ route('password.request') }}">Lupa password?</a>
            </div>
        </form>
    </div>

</body>

</html>
