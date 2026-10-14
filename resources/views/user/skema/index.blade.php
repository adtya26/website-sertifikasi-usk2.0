@extends('layouts.app')
@section('title', 'Data Skema')

@section('content')
<h3 class="mb-3">Data Skema Sertifikasi</h3>

<div class="card"><div class="table-responsive">
<table class="table table-striped mb-0">
  <thead>
    <tr><th>#</th><th>Kode</th><th>Nama Skema</th><th>Deskripsi</th><th>Peserta</th></tr>
  </thead>
  <tbody>
    @forelse ($skemas as $s)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->kode_skema }}</td>
        <td>{{ $s->nama_skema }}</td>
        <td>{{ $s->deskripsi }}</td>
        <td>{{ $s->pesertas_count }}</td>
      </tr>
    @empty
      <tr><td colspan="5" class="text-center text-muted">Belum ada data.</td></tr>
    @endforelse
  </tbody>
</table>
</div></div>
@endsection