@extends('layouts.app')
@section('title', 'Data Peserta')

@section('content')
<h3 class="mb-3">Data Peserta</h3>

<form method="get" class="row g-2 mb-3">
  <div class="col-md-6">
    <input type="text" name="q" value="{{ $q }}" class="form-control"
           placeholder="Cari nama / NIK / email / skema">
  </div>
  <div class="col-auto">
    <button class="btn btn-primary">Cari</button>
    <a href="{{ route('user.peserta.index') }}" class="btn btn-outline-secondary">Reset</a>
  </div>
</form>

<div class="card"><div class="table-responsive">
<table class="table table-striped mb-0">
  <thead>
    <tr><th>#</th><th>NIK</th><th>Nama</th><th>Email</th><th>Skema</th><th>Aksi</th></tr>
  </thead>
  <tbody>
    @forelse ($pesertas as $p)
      <tr>
        <td>{{ $pesertas->firstItem() + $loop->index }}</td>
        <td>{{ $p->nik }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->email }}</td>
        <td>{{ $p->skema?->nama_skema ?? '-' }}</td>
        <td><a href="{{ route('user.peserta.show', $p) }}" class="btn btn-sm btn-info">Detail</a></td>
      </tr>
    @empty
      <tr><td colspan="6" class="text-center text-muted">Data tidak ditemukan.</td></tr>
    @endforelse
  </tbody>
</table>
</div></div>

<div class="mt-3">{{ $pesertas->links() }}</div>
@endsection