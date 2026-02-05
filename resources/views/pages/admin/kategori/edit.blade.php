@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Edit Kategori Aduan</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- ID KATEGORI (TAMPIL, TIDAK BISA DIUBAH) --}}
                <div class="mb-3">
                    <label class="form-label">ID Kategori</label>
                    <input type="text"
                           class="form-control"
                           value="{{ $kategori->id }}"
                           readonly>

                    {{-- penjaga nilai id --}}
                    <input type="hidden" name="id" value="{{ $kategori->id }}">
                </div>

                {{-- NAMA KATEGORI --}}
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text"
                           name="nama_kategori"
                           class="form-control @error('nama_kategori') is-invalid @enderror"
                           value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
                           placeholder="Contoh: Kebisingan">

                    @error('nama_kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
