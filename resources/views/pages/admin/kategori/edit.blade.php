@extends('layouts.admin')

@section('content')
<h3>Ubah Data Admin</h3>
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="nama" class="form-control"
               value="{{ old('nama', $kategori->nama) }}" required>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection