<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang - Data Peserta Sertifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --warna-background: #AED6DC;
            --warna-card: #FFFFFF;
            --warna-tombol: #FF9A8D;
            --warna-tombol-gelap: #F0806F;
            --warna-teks-tombol: #2F3547;
            --warna-teks-utama: #4A536B;
            --warna-teks-pendukung: #6F7893;
            --warna-navbar: #4A536B;

            --bs-body-bg: var(--warna-background);
            --bs-body-color: var(--warna-teks-utama);
            --bs-body-color-rgb: 74, 83, 107;
            --bs-secondary-color: var(--warna-teks-pendukung);
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 70px;
        }

        body {
            background: var(--warna-background);
        }

        .navbar {
            background: var(--warna-navbar);
        }

        .navbar .nav-link {
            color: #fff;
            opacity: .75;
        }

        .navbar .nav-link:hover {
            opacity: 1;
        }

        .menu-kanan {
            gap: 1rem;
        }

        .btn-primary {
            --bs-btn-bg: var(--warna-tombol);
            --bs-btn-border-color: var(--warna-tombol);
            --bs-btn-color: var(--warna-teks-tombol);
            --bs-btn-hover-bg: var(--warna-tombol-gelap);
            --bs-btn-hover-border-color: var(--warna-tombol-gelap);
            --bs-btn-hover-color: var(--warna-teks-tombol);
            --bs-btn-active-bg: var(--warna-tombol-gelap);
            --bs-btn-active-border-color: var(--warna-tombol-gelap);
            --bs-btn-active-color: var(--warna-teks-tombol);
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
            padding-bottom: 40px;
        }

        .card {
            --bs-card-bg: var(--warna-card);
            --bs-card-border-color: rgba(74, 83, 107, .15);
        }

        .ikon-angka {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--warna-tombol);
            color: var(--warna-teks-tombol);
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .bagian-putih {
            background: #fff;
        }

        footer {
            background: var(--warna-navbar);
            color: #fff;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand fw-bold" href="#beranda">Aplikasi Sertifikasi</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuAtas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuAtas">
                <ul class="navbar-nav menu-kanan ms-md-auto me-md-4">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cara">Cara Pakai</a></li>
                </ul>

                <div class="d-flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light px-3">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary px-3">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="beranda" class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <h1>
                        <p class="text-uppercase fw-semibold small mb-2" style="letter-spacing:.08em;">Selamat Datang
                        </p>
                    </h1>
                    <h1 class="display-4 fw-bold mb-3">Aplikasi Pengelolaan Data Peserta Sertifikasi</h1>
                    <p class="fs-5 mb-4">
                        Catat, cari, dan kelola data peserta uji kompetensi beserta skema
                        sertifikasinya dalam satu aplikasi web yang sederhana.
                    </p>
                    <a href="#tentang" class="btn btn-outline-dark px-4">Pelajari lebih lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="bagian-putih py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-3">Tentang Aplikasi</h2>
                    <p class="mb-3">
                        Aplikasi ini dibuat untuk membantu administrator mengelola data peserta
                        sertifikasi. Data yang sebelumnya dicatat manual kini tersimpan di
                        database, sehingga lebih rapi, mudah dicari, dan mudah diperbarui.
                    </p>
                    <p class="mb-0">
                        Setiap peserta terhubung dengan satu skema sertifikasi, misalnya Junior
                        Web Developer, Network Administrator, atau Data Analyst. Dengan begitu
                        administrator bisa melihat jumlah peserta di setiap skema.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur" class="py-5">
        <div class="container py-4">
            <h2 class="fw-bold text-center mb-4">Fitur Utama</h2>

            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-semibold">Data Peserta</h5>
                            <p class="text-muted mb-0">Tambah, ubah, hapus, dan lihat detail peserta lengkap dengan NIK,
                                kontak, dan alamat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-semibold">Skema Sertifikasi</h5>
                            <p class="text-muted mb-0">Kelola daftar skema yang tersedia. Skema yang masih dipakai
                                peserta tidak bisa dihapus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-semibold">Pencarian</h5>
                            <p class="text-muted mb-0">Temukan peserta berdasarkan nama, NIK, email, atau nama skema.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-semibold">Dashboard</h5>
                            <p class="text-muted mb-0">Ringkasan total peserta, total skema, dan jumlah peserta di
                                setiap skema.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-semibold">Validasi Data</h5>
                            <p class="text-muted mb-0">Input yang tidak sesuai ditolak dengan pesan yang jelas, misalnya
                                NIK harus 16 digit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-semibold">Akses Terbatas</h5>
                            <p class="text-muted mb-0">Data hanya bisa dibuka setelah login. Admin dapat mengelola data,
                                sedangkan user hanya dapat melihat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cara" class="bagian-putih py-5">
        <div class="container py-4">
            <h2 class="fw-bold text-center mb-4">Cara Menggunakan</h2>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="ikon-angka">1</div>
                        <div>
                            <h6 class="fw-semibold">Daftar atau masuk</h6>
                            <p class="text-muted mb-0">Buat akun baru, atau masuk dengan akun yang sudah ada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="ikon-angka">2</div>
                        <div>
                            <h6 class="fw-semibold">Siapkan skema</h6>
                            <p class="text-muted mb-0">Isi daftar skema sertifikasi sebelum menambah peserta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="ikon-angka">3</div>
                        <div>
                            <h6 class="fw-semibold">Kelola peserta</h6>
                            <p class="text-muted mb-0">Tambah data peserta, pilih skemanya, lalu cari atau ubah kapan
                                saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-3 text-center small">
        Aplikasi Pengelolaan Data Peserta Sertifikasi
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
