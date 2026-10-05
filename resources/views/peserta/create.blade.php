@extends('layouts.app')
@section('title', 'Tambah Peserta')

@section('content')
<h3 class="mb-3">Tambah Peserta</h3>

<div class="card"><div class="card-body">
  <form method="post" action="{{ route('peserta.store') }}" novalidate>
    @csrf

    <div class="mb-3">
      <label class="form-label">NIK (16 digit) *</label>
      <input type="text" name="nik" value="{{ old('nik') }}"
             class="form-control @error('nik') is-invalid @enderror">
      @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Nama Lengkap *</label>
      <input type="text" name="nama" value="{{ old('nama') }}"
             class="form-control @error('nama') is-invalid @enderror">
      @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Email *</label>
      <input type="email" name="email" value="{{ old('email') }}"
             class="form-control @error('email') is-invalid @enderror">
      @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">No. HP *</label>
      <input type="text" name="no_hp" value="{{ old('no_hp') }}"
             class="form-control @error('no_hp') is-invalid @enderror">
      @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal Lahir *</label>
      <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
             class="form-control @error('tanggal_lahir') is-invalid @enderror">
      @error('tanggal_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Alamat *</label>
      <textarea name="alamat" rows="3"
                class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
      @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Skema Sertifikasi *</label>
      <select name="skema_id" class="form-select @error('skema_id') is-invalid @enderror">
        <option value="">-- Pilih Skema --</option>
        @foreach ($skemaList as $s)
          <option value="{{ $s->id }}" @selected(old('skema_id') == $s->id)>
            {{ $s->nama_skema }}
          </option>
        @endforeach
      </select>
      @error('skema_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div></div>
@endsection