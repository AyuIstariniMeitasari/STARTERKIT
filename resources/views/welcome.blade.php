<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Berita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #dee2ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card-menu {
            transition: transform 0.2s ease-in-out;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            background-color: #ffffff;
        }

        .card-menu:hover {
            transform: translateY(-5px);
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .icon-berita {
            color: #0d6efd;
        }

        .icon-admin {
            color: #198754;
        }

        .icon-wartawan {
            color: #0dcaf0;
        }

        .welcome-title {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 40px;
        }

        .footer {
            position: absolute;
            bottom: 20px;
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h1 class="welcome-title">📰 Selamat Datang di <span class="text-primary">Portal Berita</span></h1>

        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="card card-menu p-4">
                    <div class="card-body">
                        <div class="card-icon icon-berita"><i class="bi bi-newspaper"></i></div>
                        <h5 class="card-title">Portal Berita</h5>
                        <p class="text-muted">Telusuri berita-berita terkini dari berbagai kategori.</p>
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary w-100">
                            <i class="bi bi-eye"></i> Lihat Berita
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-menu p-4">
                    <div class="card-body">
                        <div class="card-icon icon-admin"><i class="bi bi-person-lock"></i></div>
                        <h5 class="card-title">Masuk sebagai Admin</h5>
                        <p class="text-muted">Kelola berita dan kontrol seluruh sistem portal.</p>
                        <a href="{{ route('admin.login') }}" class="btn btn-outline-success w-100">
                            <i class="bi bi-box-arrow-in-right"></i> Login Admin
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-menu p-4">
                    <div class="card-body">
                        <div class="card-icon icon-wartawan"><i class="bi bi-pencil-square"></i></div>
                        <h5 class="card-title">Masuk sebagai Wartawan</h5>
                        <p class="text-muted">Buat dan kelola berita yang akan dipublikasikan.</p>
                        <a href="{{ url('/wartawan/dashboard') }}" class="btn btn-outline-info w-100">
                            <i class="bi bi-journal-text"></i> Masuk Wartawan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer mt-5">
            &copy; {{ date('Y') }} Portal Berita. All rights reserved.
        </div>
    </div>

</body>
</html>
