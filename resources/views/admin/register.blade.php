<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #1cc88a, #4e73df);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .card {
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 450px;
            background: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-control:focus {
            border-color: #1cc88a;
            box-shadow: 0 0 0 0.2rem rgba(28, 200, 138, 0.25);
        }

        .top-back {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .register-title {
            color: #1cc88a;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Tombol kembali -->
    <a href="{{ url('/') }}" class="btn btn-outline-light top-back">
        <i class="bi bi-arrow-left-circle me-1"></i> Beranda
    </a>

    <!-- Card Form Register -->
    <div class="card">
        <div class="text-center mb-3">
            <i class="bi bi-person-plus display-4 text-success"></i>
            <h4 class="register-title mt-2">Register Admin</h4>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">👤 Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nama lengkap" required autofocus>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">📧 Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="admin@email.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">🔒 Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Minimal 8 karakter" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">🔁 Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-check-circle me-1"></i> Daftar
            </button>

            <div class="text-center mt-3 small">
                <a href="{{ route('admin.login') }}">Sudah punya akun? <strong>Login</strong></a>
            </div>
        </form>
    </div>

</body>

</html>
