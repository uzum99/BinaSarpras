@extends('layouts.admin')

@section('content')

<div class="container py-3">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Kategori</h4>

      <form action="{{ route('kategori.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
  </div>
</div>
@endsection