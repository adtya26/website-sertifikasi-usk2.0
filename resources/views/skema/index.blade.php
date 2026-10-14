@extends('layouts.app')
@section('title', 'Data Skema')

@section('content')
@php $admin = auth()->user()->isAdmin(); @endphp

<div class="d-flex justify-content-between mb-3">
  <h3>Data Skema Sertifikasi</h3>
  @if ($admin)
    <a href="{{ route('skema.create') }}" class="btn btn-primary">+ Tambah Skema</a>
  @endif
</div>

<div class="card"><div class="table-responsive">
<table class="table table-striped mb-0">
  <thead>
    <tr>
      <th>#</th><th>Kode</th><th>Nama Skema</th><th>Deskripsi</th><th>Peserta</th>
      @if ($admin) <th width="160">Aksi</th> @endif
    </tr>
  </thead>
  <tbody>
    @forelse ($skemas as $s)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->kode_skema }}</td>
        <td>{{ $s->nama_skema }}</td>
        <td>{{ $s->deskripsi }}</td>
        <td>{{ $s->pesertas_count }}</td>
        @if ($admin)
          <td>
            <a href="{{ route('skema.edit', $s) }}" class="btn btn-sm btn-warning">Ubah</a>
            <form action="{{ route('skema.destroy', $s) }}" method="post" class="d-inline"
                  onsubmit="return confirm('Yakin hapus skema ini?')">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
          </td>
        @endif
      </tr>
    @empty
      <tr><td colspan="{{ $admin ? 6 : 5 }}" class="text-center text-muted">Belum ada data.</td></tr>
    @endforelse
  </tbody>
</table>
</div></div>
@endsection