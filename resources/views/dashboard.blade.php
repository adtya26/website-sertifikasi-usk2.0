@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<h3 class="mb-3">Dashboard</h3>

<div class="row g-3 mb-4">
  <div class="col-md-6">
    <div class="card border-0 shadow-sm kartu-salmon">
      <div class="card-body">
        <div class="text-muted small text-uppercase">Total Peserta</div>
        <div class="display-6 fw-semibold">{{ $totalPeserta }}</div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card border-0 shadow-sm kartu-biru">
      <div class="card-body">
        <div class="text-muted small text-uppercase">Total Skema Sertifikasi</div>
        <div class="display-6 fw-semibold">{{ $totalSkema }}</div>
      </div>
    </div>
  </div>
</div>

<div class="card border-0 shadow-sm">
  <div class="card-header fw-semibold">Jumlah Peserta per Skema</div>
  <table class="table table-hover mb-0">
    <thead>
      <tr><th>Skema</th><th width="180">Jumlah Peserta</th></tr>
    </thead>
    <tbody>
      @foreach ($perSkema as $s)
        <tr><td>{{ $s->nama_skema }}</td><td>{{ $s->pesertas_count }}</td></tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection