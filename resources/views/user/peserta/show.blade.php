<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Peserta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --warna-background: #FFFFFF;
      --warna-card: #AED6DC;
      --warna-teks-utama: #4A536B;

      --bs-body-bg: var(--warna-background);
      --bs-body-color: var(--warna-teks-utama);
      --bs-body-color-rgb: 74, 83, 107;
    }

    .card {
      --bs-card-bg: var(--warna-card);
      --bs-card-border-color: rgba(74, 83, 107, .15);
    }
  </style>
</head>
<body>
<div class="container py-5" style="max-width:720px;">
  <h3 class="mb-3">Detail Peserta</h3>

  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <table class="table table-borderless mb-0" style="--bs-table-bg: transparent;">
        <tr><th width="170">NIK</th><td>{{ $peserta->nik }}</td></tr>
        <tr><th>Nama</th><td>{{ $peserta->nama }}</td></tr>
        <tr><th>Email</th><td>{{ $peserta->email }}</td></tr>
        <tr><th>No. HP</th><td>{{ $peserta->no_hp }}</td></tr>
        <tr><th>Tanggal Lahir</th><td>{{ $peserta->tanggal_lahir?->format('d-m-Y') ?? '-' }}</td></tr>
        <tr><th>Alamat</th><td>{!! nl2br(e($peserta->alamat)) !!}</td></tr>
        <tr><th>Skema</th><td>{{ $peserta->skema?->kode_skema ?? '-' }} - {{ $peserta->skema?->nama_skema ?? '-' }}</td></tr>
        <tr><th>Didaftarkan</th><td>{{ $peserta->created_at?->format('d-m-Y H:i') ?? '-' }}</td></tr>
      </table>
    </div>
  </div>

  <a href="{{ route('user.peserta.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html>