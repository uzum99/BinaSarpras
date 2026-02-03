@extends('layouts.admin')

@section('content')

<div class="container">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nomor Aduan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Pengirim</th>
      <th scope="col">Subjek</th>
      <th scope="col">Pesan</th>
      <th scope="col">Lampiran</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($aduan as $item)
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $item->nomor_aduan }}</td>
      <td>{{ $item->kategori->nama }}</td>
      <td>{{ $item->siswa->nama }}</td>
      <td>{{ $item->subjek }}</td>
      <td>{{ $item->pesan }}</td>
      <td>{{ $item->lampiran }}</td>
      <td>{{ $item->status }}</td>
      <td> <a href="#" class="btn btn-primary">detail</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection