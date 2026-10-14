<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Aplikasi') - Data Peserta Sertifikasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --warna-background: #FFFFFF;
      --warna-card: #AED6DC;
      --warna-tombol: #FF9A8D;
      --warna-tombol-gelap: #F0806F;
      --warna-teks-tombol: #FFFFFF;
      --warna-teks-utama: #4A536B;
      --warna-teks-pendukung: #6F7893;
      --warna-navbar: #4A536B;

      --bs-body-bg: var(--warna-background);
      --bs-body-color: var(--warna-teks-utama);
      --bs-body-color-rgb: 74, 83, 107;
      --bs-secondary-color: var(--warna-teks-pendukung);
      --bs-link-color: var(--warna-navbar);
      --bs-link-hover-color: var(--warna-tombol-gelap);
    }

    body { background: var(--warna-background); }

    .card {
      --bs-card-bg: var(--warna-card);
      --bs-card-border-color: rgba(74, 83, 107, .15);
      --bs-card-cap-bg: #F3F8F9;
    }
    .card .table { --bs-table-bg: transparent; }

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

    .pagination {
      --bs-pagination-color: var(--warna-navbar);
      --bs-pagination-hover-color: var(--warna-teks-tombol);
      --bs-pagination-active-bg: var(--warna-tombol);
      --bs-pagination-active-border-color: var(--warna-tombol);
      --bs-pagination-active-color: var(--warna-teks-tombol);
    }

    .navbar { background: var(--warna-navbar); }
    .navbar .nav-link { color: #fff; opacity: .7; }
    .navbar .nav-link:hover { opacity: 1; }
    .navbar .nav-link.active { opacity: 1; border-bottom: 2px solid var(--warna-tombol); }

    .table thead th {
      background-color: var(--warna-navbar);
      color: #fff;
      border-bottom: 0;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--warna-tombol);
      box-shadow: 0 0 0 .2rem rgba(255, 154, 141, .35);
    }

    .kartu-salmon { border-left: 5px solid var(--warna-tombol) !important; }
    .kartu-biru { border-left: 5px solid var(--warna-navbar) !important; }
  </style>
</head>
<body>

@php $p = auth()->user()->isAdmin() ? '' : 'user.'; @endphp

<nav class="navbar navbar-expand-lg navbar-dark mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route($p.'dashboard') }}">Data Sertifikasi</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuUtama">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs($p.'dashboard') ? 'active' : '' }}"
             href="{{ route($p.'dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs($p.'peserta.*') ? 'active' : '' }}"
             href="{{ route($p.'peserta.index') }}">Data Peserta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs($p.'skema.*') ? 'active' : '' }}"
             href="{{ route($p.'skema.index') }}">Skema</a>
        </li>
      </ul>

      <span class="text-white small me-3">
        {{ auth()->user()->name }}
        <span class="badge text-bg-light ms-1">{{ auth()->user()->isAdmin() ? 'Admin' : 'User' }}</span>
      </span>
      <form action="{{ route('logout') }}" method="post" class="d-inline">
        @csrf
        <button class="btn btn-sm btn-outline-light">Logout</button>
      </form>
    </div>
  </div>
</nav>

<div class="container pb-5">
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif
  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>