<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard Umum - Berita Terbaru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .card {
            border-left: 0.25rem solid #4e73df;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.01);
        }

        .card-title {
            font-size: 1.1rem;
        }

        .card-text {
            font-size: 0.95rem;
        }

        .section-header {
            font-weight: bold;
            color: #4e73df;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2"></i>Portal Berita</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">

        <h2 class="text-center section-header mb-3"><i class="bi bi-stars me-2"></i>Berita Terbaru Hari Ini</h2>

        <!-- Tombol Kembali ke Beranda -->
        <div class="text-center mb-4">
            <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left-circle me-1"></i> Kembali ke Beranda
            </a>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">🎓 Pemerintah Resmikan Beasiswa Digital 2025</h5>
                        <p class="text-muted small"><i class="bi bi-calendar-event me-1"></i> 14 Juni 2025</p>
                        <p class="card-text">Program beasiswa untuk mendukung transformasi digital kini resmi tersedia untuk seluruh mahasiswa Indonesia.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">🚀 Startup Lokal Tembus Pasar Asia Tenggara</h5>
                        <p class="text-muted small"><i class="bi bi-calendar-event me-1"></i> 13 Juni 2025</p>
                        <p class="card-text">Startup agritech asal Bandung sukses ekspansi ke Malaysia setelah pendanaan dari investor regional.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">🌪️ Cuaca Ekstrem Melanda Wilayah Selatan</h5>
                        <p class="text-muted small"><i class="bi bi-calendar-event me-1"></i> 12 Juni 2025</p>
                        <p class="card-text">BMKG keluarkan peringatan dini terkait angin kencang dan hujan deras di Jawa dan Bali bagian selatan.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">🛰️ Peluncuran Satelit Komunikasi Nasional</h5>
                        <p class="text-muted small"><i class="bi bi-calendar-event me-1"></i> 11 Juni 2025</p>
                        <p class="card-text">Indonesia sukses luncurkan satelit komunikasi untuk memperluas jaringan internet di wilayah terpencil.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">🎭 Festival Budaya Nusantara 2025 Dimulai</h5>
                        <p class="text-muted small"><i class="bi bi-calendar-event me-1"></i> 10 Juni 2025</p>
                        <p class="card-text">Taman Mini menjadi tuan rumah festival budaya tahunan yang menampilkan seni dari 34 provinsi.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">🛒 Harga Sembako Mulai Stabil Menjelang Lebaran</h5>
                        <p class="text-muted small"><i class="bi bi-calendar-event me-1"></i> 9 Juni 2025</p>
                        <p class="card-text">Kementerian Perdagangan menyatakan stabilisasi harga sembako berhasil lewat operasi pasar nasional.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
