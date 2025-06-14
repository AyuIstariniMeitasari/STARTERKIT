<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .section-title {
            font-weight: bold;
            color: #4e73df;
            margin-top: 30px;
        }

        .status-publish {
            color: #1cc88a;
            font-weight: 600;
        }

        .status-unpublished {
            color: #e74a3b;
            font-weight: 600;
        }

        .card-custom {
            border-left: 5px solid #4e73df;
            transition: transform 0.2s ease-in-out;
            border-radius: 12px;
        }

        .card-custom:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .logout-btn {
            border-radius: 20px;
        }

        .card-title i {
            color: #4e73df;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-speedometer2 me-2"></i>Admin Panel</a>
            <div class="ms-auto">
                <form action="{{ url('/admin/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm logout-btn">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container py-4">

        <!-- Admin Profile -->
        <div class="card shadow-sm mb-4 card-custom">
            <div class="card-body">
                <h5 class="card-title mb-3"><i class="bi bi-person-circle me-2"></i>Profil Admin</h5>
                <p><strong>Nama:</strong> Admin Utama</p>
                <p><strong>Email:</strong> admin@example.com</p>
                <p><strong>Terdaftar Sejak:</strong> Januari 2024</p>
            </div>
        </div>

        <!-- News List -->
        <h4 class="section-title"><i class="bi bi-newspaper me-1"></i>Daftar Berita</h4>

        <div class="row g-4">

            <!-- Card Berita -->
            <div class="col-md-6">
                <div class="card shadow-sm card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Peluncuran Aplikasi Nasional EduTech</h5>
                        <p class="text-muted small"><i class="bi bi-clock me-1"></i>10 Juni 2025</p>
                        <p>Status: <span class="status-publish">Published</span></p>
                        <p class="card-text">Pemerintah meluncurkan aplikasi EduTech untuk mendukung pembelajaran daring nasional.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye me-1"></i>Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Pasar Tradisional Digitalisasi dengan QRIS</h5>
                        <p class="text-muted small"><i class="bi bi-clock me-1"></i>8 Juni 2025</p>
                        <p>Status: <span class="status-unpublished">Unpublished</span></p>
                        <p class="card-text">Inisiatif digitalisasi pasar tradisional melalui sistem pembayaran QRIS terus dikembangkan.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye me-1"></i>Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm card-custom">
                    <div class="card-body">
                        <h5 class="card-title">Indonesia Tuan Rumah Forum Ekonomi Digital</h5>
                        <p class="text-muted small"><i class="bi bi-clock me-1"></i>6 Juni 2025</p>
                        <p>Status: <span class="status-publish">Published</span></p>
                        <p class="card-text">Forum global membahas kolaborasi ekonomi digital diadakan di Jakarta Convention Center.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye me-1"></i>Lihat Detail</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
