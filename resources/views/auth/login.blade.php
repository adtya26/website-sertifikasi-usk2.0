<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
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

      --bs-body-bg: var(--warna-background);
      --bs-body-color: var(--warna-teks-utama);
      --bs-body-color-rgb: 74, 83, 107;
      --bs-secondary-color: var(--warna-teks-pendukung);
    }

    body { background: var(--warna-background); }
    .card { --bs-card-bg: var(--warna-card); --bs-card-border-color: rgba(74, 83, 107, .15); }

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

    .form-control:focus {
      border-color: var(--warna-tombol);
      box-shadow: 0 0 0 .2rem rgba(255, 154, 141, .35);
    }
  </style>
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card border-0 shadow" style="width:100%; max-width:400px;">
    <div class="card-body p-4">
      <h4 class="fw-bold mb-1">Masuk</h4>
      <p class="text-muted mb-4">Aplikasi Pengelolaan Data Peserta Sertifikasi</p>

      @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
      @endif

      <form method="post" action="{{ route('login.proses') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" class="form-control" autofocus>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <button class="btn btn-primary w-100">Masuk</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>